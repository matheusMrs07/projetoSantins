<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUniversityRequest;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UniversitiesController extends Controller
{
    
    public function index(University $model, Request $request){

        $search = $request->search;

        $universities = $model->where(function ($query) use ($search){
            $query->where('name', 'LIKE', "%{$search}%");
            $query->orWhere('domains', 'LIKE', "%{$search}%");
        })->paginate();

        //dd($universities->onFirstPage());

        return view('universities.index', compact('universities'));

    }

    public function load(University $model){

        $response = Http::get('http://universities.hipolabs.com/search?country=United+States')->json();

        $data = [];

        for ($i = 0; $i <= 99; $i++) {
            
           $data = [
                "alpha_two_code"=> $response[$i]['alpha_two_code'],
                "domains" => $response[$i]['domains'][0],
                "country" => $response[$i]['country'],
                "web_pages" => $response[$i]['web_pages'][0],
                "name" => $response[$i]['name'],
                "status" => 'Aprovada'
           ];

           $model->create($data);
        }
        

        

        return redirect()->route('universities.index');
        

    }

    public function show($id){

        dd($id);
        //return view('universidades.show');

    }

    public function create(){
        

        return view('universities.create');
        
    }
    
    public function store(University $model, StoreUpdateUniversityRequest $request){

        $data = $request->all();

        $data['status'] = 'Aguardando aprovação';


        $model->create($data);

        return redirect()->route('universities.index');
        
    }
    
    public function update(){
        
    }
}
