<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }

    public function details()
    {
        return view('website.home.detail');
    }
}
