<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPageController extends Controller
{
    public function index()
    {
        return view('content.new_page');
    }
}
