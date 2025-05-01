<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function About()
    {
        return view('about');
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Projet()
    {
        return view('projet');
    }

    public function Service1()
    {
        return view('service1');
    }

    public function Service2()
    {
        return view('service2');
    }

    public function Service3()
    {
        return view('service3');
    }

    public function Service4()
    {
        return view('service4');
    }

    public function Service5()
    {
        return view('service5');
    }

    public function Service6()
    {
        return view('service6');
    }
}
