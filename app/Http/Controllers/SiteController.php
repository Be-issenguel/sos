<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campanha;

class SiteController extends Controller
{
    public function index(){
        return view('site/home')->withCampanhas(Campanha::all());
    }
}
