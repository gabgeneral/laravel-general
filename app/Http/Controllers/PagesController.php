<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // return view('pages.index'); ==> Original Code
        $title = "MAIN";
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "ABOUT US";
        return view('pages.about') ->with('title', $title);
    }
    public function services(){
        $data = array(    
            'title' => "Services",
            'services' => ["Web Design", "Programming", "SEO"]
        );
        return view('pages.services') ->with($data);
    }
}


