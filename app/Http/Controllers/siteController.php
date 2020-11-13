<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class siteController extends Controller
{
    public function index(){
        $members=member::all();
        $sliders=slider::all();

        return view('index',compact('members','sliders'));
    }

    public function contact(){
        return view('contact');
    }

    public function error(){
        return view('error');
    }

    public function about(){
        return view('about');
    }

    public function convert(){
        return view('convert');
    }

    public function project(){
        return view('project');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function blog(){
        return view('blogs');
    }

    public function history(){
        return view('history');
    }

    public function career(){
        return view('career');
    }

    public function partnership(){
        return view('partnership');
    }

    public function leadership(){
        return view('leadership');
    }

    public function faq(){
        return view('faq');
    }

    public function register()
    {
        // Only authenticated users may enter...
        return view('register');
    }

}
