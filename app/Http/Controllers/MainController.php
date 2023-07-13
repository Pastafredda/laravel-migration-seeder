<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Railway;

class MainController extends Controller
{
    public function index(){

        $railways = Railway :: all();

        return view('home', compact('railways'));

    }
}
