<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home()
    {
        return view('home');  // এখানে 'home' মানে resources/views/home.blade.php
    } 
    public function about()
    {
        return view('about'); // এখানে 'about' মানে resources/views/about.blade.php
    }
    public function article()
    {
        return view('testview',['myarticle'=>'passing article to view']);
    }
}

