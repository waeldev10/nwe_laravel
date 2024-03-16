<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    
    public function index($lang){
        App::setLocale($lang);
        return view('welcome');
    }

    public function more($lang){
        App::setLocale($lang);
        return view('more');
    }

    public function all_services($lang){
        App::setLocale($lang);
        return view('all-services');
    }

    public function setLang($locale){
        App::setLocale($locale);
        Session::put("locale",$locale);
        return redirect()->back();
    }
    // public function index(){

    //     return view('welcome');
    // }

    // public function more(){

    //     return view('more');
    // }

    // public function all_services(){
  
    //     return view('all-services');
    // }

}
