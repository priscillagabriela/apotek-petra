<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index()
    {
        return view('perhitungan.index');
    }
}
