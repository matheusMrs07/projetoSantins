<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubscriptionController extends Controller
{
    public function index(Subscription $model, Request $request)
    {
        $userId = auth()->user()->id;

        $search = $request->search;

        $subscriptions = $model->join('universities', 'universities.id', '=', 'subscriptions.university_id')
        ->where('user_id', '=', $userId)
        ->where(function ($query) use ($search){
            $query->where('universities.name', 'LIKE', "%{$search}%");
        })
        ->select(['subscriptions.*', 'universities.name', 'universities.country'])
        ->paginate();


        return view('subscriptions.index', compact('subscriptions'));
    }


    public function store(Subscription $model, $universityId)
    {

        $userId = auth()->user()->id;
        
        $sub = [
            'user_id' => $userId,
            'university_id' => $universityId
        ];


        $model->create($sub);

        return redirect()->route('subscriptions.index');
    }

    public function delete(Subscription $model, $id)
    {
        $subs = $model->destroy($id);

        return redirect()->route('subscriptions.index');
    }

    public function show(Subscription $model)
    {
        $subs = $model->get();

        return view('subs.index', compact('subs'));
    }


    public function apiGet(Request $request){

        $credentials = $request->all();

        if(!$user = User::where('email', '=', $credentials['email'])->first())
            return "User not found!";


        if(!Hash::check($credentials['password'], $user->password))
            return "Password incorrectly!";
        

        $subscriptions = Subscription::join('universities', 'universities.id', '=', 'subscriptions.university_id')
        ->where('user_id', '=', $user->id)
        ->select(['subscriptions.*', 'universities.name as univ_name', 'universities.country as univ_country'])
        ->get();

        return $subscriptions;

    }



}
