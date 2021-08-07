<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Homapage
    public function index(Request $request){
        return view('pages.homepage');
    }

    // courses
    public function courses(){
        return view('pages.courses');
    }

    // Online Registration
    public function registration(){
        return view('pages.online-registration');
    }

    // Branches
    public function school_branches(){
        return view('pages.branches');
    }

    // Our Contacts
    public function contact(){
        return view('pages.contacts');
    }

    // About Us
    public function about_us(){
        return view('pages.about-us');
    }

    // Assessment
    public function driver_assessment(){
        return view('pages.driver-assessment');
    }
}
