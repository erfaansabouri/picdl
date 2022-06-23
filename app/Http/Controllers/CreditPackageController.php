<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditPackageController extends Controller
{
    public function index()
    {
        return view('website.credit-packages');
    }
}
