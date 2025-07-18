<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome() 
    {
        $products = Product::where('qty', '>', 0)->get();
        return view('welcome', compact('products'));
    }

    public function shop() 
    {
        return view('shop');
    }

    public function blogs() 
    {
        return view('blogs');
    }

    public function contact() 
    {
        return view('contact');
    }

    public function signin() 
    {
        return view('signin');
    }

    public function signup() 
    {
        return view('signup');
    }

    public function dashboard() 
    {
        return view('admin.dashboard');
    }

    public function product($id) 
    {
        $item = Product::find($id);
        return view('product', compact('item'));
    }

    public function groups() 
    {
        $groups = Group::all();
        return view('admin.groups', compact('groups'));
    }

    public function profile() 
    {
        return view('admin.profile');
    }
}
