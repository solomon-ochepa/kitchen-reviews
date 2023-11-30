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
        $data['title'] = "Create Review";

        return view("review.create", $data);
    }
}
