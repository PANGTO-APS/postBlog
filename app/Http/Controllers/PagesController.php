<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {   
        $title = 'Welcome To APAPP!';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $title = 'About US';
        //return view('pages.index',compact('title'));
        return view('pages.about')->with('title',$title);
    }
    public function service()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Program','Web Design','Marketing']
        );
        return view('pages.service')->with($data);
    }
}
