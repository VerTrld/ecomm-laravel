<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    function login(Request $req){

        // return $req->input();

       $user =  User:: where(['email'=>$req->email])->first();
       if (!$user || !Hash::check($req->password,$user->password)) {
        return " Username or Password not matched";
       }
       else {
        $req->session()->put('user',$user);
        return Redirect('/');
        
       }

    }
    function register(Request $req){

        $user = new USER;
        $user -> name=$req->name;
        $user -> email=$req->email;
        $user -> password=Hash::make($req->password);
        $user -> save();
       return redirect('/login');



    }

}
