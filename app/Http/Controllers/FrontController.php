<?php

namespace App\Http\Controllers;

use App\Models\Contact_form;
use App\Models\Logo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $logo=Logo::first();
        return view('index',compact('logo'));
    }

    function about(){
        $logo=Logo::first();
        return view('about',compact('logo'));
    }
    function submit_form(Request $request){
        $form=new Contact_form();
        $form->fname=$request->fname;
        $form->lname=$request->lname;

        $form->company=$request->company;
        $form->promoting=$request->promoting;
        $form->industry=$request->industry;
        $form->budget=$request->budget;
        $form->services=$request->services;
        $form->app=$request->app;
        $form->save();
        return back()->with("success","Thank You for your feedback");

    }
}
