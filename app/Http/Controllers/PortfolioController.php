<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('pages.portfolio.index');
    }

    public function about(){
        return view('pages.portfolio.about');
    }

    public function team(){
        return view('pages.portfolio.team');
    }

    public function contact(){
        return view('pages.portfolio.contact');
    }

    public function service(){
        return view('pages.portfolio.service');
    }
}
