<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Session;
use Illuminate\support\Facades\File;

class CarController extends Controller
{



    public function carRegistration(){
        return view("pages.carRegistration");


    }
    public function carRegistrationSubmit(Request $request)
    {
        $validate=$request->validate(
        [
            'make'=>'required|min:3|max:100',
            'model'=>'required',
            'vin'=>'required',
            'price'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'image'=>'required',
            
    
        ],
        [
            'make.required'=>'Please Enter make',
           
            'model.required'=>'Please Enter model',
            'vin.required'=>'Please Enter vin',
            'price.required'=>'Please Enter price',
            'image.required'=>'Please Enter image url',
            
           
        ]
        );
        // $id=Session::get("id");
        $car=new Car();
     
        $car->make =$request->make;
        $car->model=$request->model;
        $car->vin=$request->vin;
        $car->price=$request->price;
      
        $car->image=$request->image;
       
        $car->save();
        return redirect()->route('carinfo');
    }

    public function carUpdate($id){
        $car =Car ::where('id', $id)->first();
        return view('pages.carUpdate')->with('car', $car);
       // return $car;
       }
    
       public function carUpdateSubmit(Request $request){
       
           $car =Car ::where('id', $request->id)->first();
           
       
      
       
           $car->make =$request->make;
           $car->model=$request->model;
           $car->vin=$request->vin;
           $car->price=$request->price;
         
           $car->image=$request->image;
           $car->save();
         return redirect()->route("carinfo");
     
     }

    public function carinfo(){
   
       
        $keys =Car::all();
     
     return view("pages.carinfo")->with('keys', $keys);
       
     
        
    }
    public function carDelete(Request $request){
       
        $car =Car ::where('id', $request->id)->first();
        
        $car->delete();
         return redirect()->route('carinfo');
     
    
    }
    public function carDetails(){
   
    
       return view("pages.cardetails");
     
        
    }

  
    public function singleCardetails(Request $request){

         $keys =Car ::where('id', $request->id)->first();

             return view("pages.cardetails")->with('keys', $keys);

        
        }
    }

