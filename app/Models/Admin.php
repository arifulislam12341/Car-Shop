<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    public function adminDetail(){
        $keys= Admin::where("id",$this->id)->get();
       
        return view('pages.admininfo')->with('keys', $keys);
    }
}
