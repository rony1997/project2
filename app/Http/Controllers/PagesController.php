<?php
//namespace
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    //link to home
    function home(){
        return view( 'pages.home');
    }
    //about page
    function about(){
        return view( 'pages.about');
    }
    //contact page
    function contact(){
        return view( 'pages.contact');
    }
    // name page
    function store(Request $request){
        $name = $request->name;
        return redirect()->route('thanks',['name'=> $name]);
    }
    function thanks($name, Request $request){
        return view('pages.thankyou')->with(compact('name'));
    }
    function homepage(){
        return view( 'pages.homepage');
    }
}
