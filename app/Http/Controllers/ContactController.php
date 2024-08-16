<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Contact - Online Store";
        $viewData["subtitle"] =  "Contact us";
        $viewData["description"] = "This is a contact page ...";
        $viewData["email"] = "ariosm@eafit.edu.co";
        $viewData["address"] = "Cra 49 # 7 Sur-50, Medellín, Colombia";
        $viewData["phone"] = "+57 4 2619500";
        return view('home.contact')->with("viewData", $viewData);
    }
}