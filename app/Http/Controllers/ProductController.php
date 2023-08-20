<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products' => $data]);
    }

    function detail($id){

        $data = Product::find($id);
        return view('detail',['products' => $data]);
    }
function addToCart(Request $req){
    if ($req->session()->has('user')) {
        $user = $req->session()->get('user'); // Retrieve the user array from the session
        $cart = new Cart;
        $cart->user_id = $user['id']; // Access the 'id' key of the user array
        $cart->product_id = $req->product_id;
        $cart->save();

        return redirect('/detail/' . $req->product_id);
    }
            else {

             return   redirect('/login');
        }

    }
   static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

}
