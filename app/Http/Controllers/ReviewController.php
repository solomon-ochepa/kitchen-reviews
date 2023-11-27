<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function index()
    {
        return view("review.index");
    }

    function create()
    {
        return ("review.create"); 
    }
}
