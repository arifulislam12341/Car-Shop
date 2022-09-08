<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{




    public function signin(){
        return view('pages.signin');

    }
    public function signinSubmit(Request $request){
        $validate=$request->validate(
            [
                
             
                'email'=>'required',
                'password'=>'required',
        
            ],
            [
                
               
                
                'email.required'=>'Please enter your email',
                'password.required'=>'Please enter your password',
            ]
            );
            $service=Admin::where("email",$request->email)
            ->where("password",$request->password)
        
                ->first();
        
                if ($service){
                    $request->session()->put("id",$service->id); 
                    if ($request->remember) {
                        setcookie('remember',$request->email, time()+36000);
                        Cookie::queue('name',$service->email,time()+60);
                    }else{
                        setcookie('remember',"");
                        Cookie::queue('name',"");
                    }
                    return redirect()->route("admininfo");
                    
                }
        
                return back();
       

    }
    public function adminRegistration(){
        return view("pages.adminRegistration");


    }
    public function adminRegistrationSubmit(Request $request)
    {
        $validate=$request->validate(
        [
            'name'=>'required|min:3|max:100',
            'email'=>'required',
            'password'=>'required',
            'phonenu'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            
            'address'=>'required',
    
        ],
        [
            'name.required'=>'Please Enter Your Name',
            'name.min'=>'Name must be greater than 3 charcters',
            'name.max'=>'Name must be less than 100 charcters',
            'password.required'=>'Please Enter Your password',
            'phonenu.required'=>'Please Enter Your Phone Number',
            'email.required'=>'Please Enter Your Email',
            
            'address.required'=>'Please Enter Your address',
        ]
        );
        $admin=new Admin();

        $admin->name =$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->phone =$request->phonenu;
       
        $admin->address=$request->address;
 
        
 
        $admin->save();
        return redirect()->route('allAdmin');
    }

    public function adminDelete(Request $request){
        $admin =Admin ::where('id', $request->id)->first();
        $admin->delete();
    
     return redirect()->route("allAdmin");
    }

    public function admindash(){
        return view('pages.admindash');

    }
    public function adminInfo(){
   
        $id=Session::get("id");
        $t =Admin::where('id',$id)->first();
    
        return $t->adminDetail();
       
        
    }
    public function adminUpdate(){
        $id=Session::get("id");
        $user =Admin ::where('id', $id)->first();
        return view('pages.adminupdate')->with('user', $user);
       }
    
       public function adminUpdateSubmit(Request $request){
       
           $admin =Admin ::where('id', $request->id)->first();
           
       
      
           $admin->name =$request->name;
           $admin->email=$request->email;
           $admin->password=$request->password;
           $admin->phone =$request->phonenu;
          
           $admin->address=$request->address;
     
           $admin->save();
         return redirect()->route("admininfo");
     
     }

     public function allAdmin(){
        $keys =Admin::all();
        // $details=orderdetails::all()->where('service_provider_id',$id);
     return view("pages.allAdmin")->with('keys', $keys);
       
        
    }


     public function Logout(){
        session()->forget('id');
        return redirect()->route('signin');
    }
}
