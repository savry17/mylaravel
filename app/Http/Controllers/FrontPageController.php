<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('front_home');
    }
    public function about(){
        $data["title"] = "About Us";
        $data["dest"] = "About";
        return view('front-about',$data);
    }
    public function services(){
        $data["title"] = "Services";
        $data["dest"] = "Services";
        return view('front_services',$data);
    }
    public function packages(){
        $data["title"] = "Packages";
        $data["dest"] = "Packages";
        return view('front_packages',$data);
    }
    public function destination(){
        $data["title"] = "destination";
        $data["dest"] = "destination";
        return view('front_destination',$data);
    }
    public function booking(){
        $data["title"] = "booking";
        $data["dest"] = "booking";
        return view('front_booking',$data);
    }
    public function travelguides(){
        $data["title"] = " travelguides";
        $data["dest"] = " travelguides";
        return view('front_guides',$data);
    }
    public function testimonial(){
        $data["title"] = " testimonial";
        $data["dest"] = " testimonial";
        return view('front_testimonial',$data);
    }
    public function error(){
        $data["title"] = " 404page";
        $data["dest"] = " 404page";
        return view('front_404',$data);
    }
    public function contact(){
        $data["title"] = " contact";
        $data["dest"] = " contact";
        return view('front_contact',$data);
    }
}
