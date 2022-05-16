<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'alpha_two_code',
        'country',
        'domains',
        'name',
        'web_pages'
    ];

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
