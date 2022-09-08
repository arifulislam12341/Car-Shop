<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    // public function carDetails(){
    //     $keys= Car::where("id",$this->id)->get();
       
    //     return view('pages.carinfo')->with('keys', $keys);
    // }
}
