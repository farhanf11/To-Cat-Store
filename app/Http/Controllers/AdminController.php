<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function products(){
        return view('dashboard-products');
    }

    public function transactions(){
        return view('dashboard-transactions');
    }

    public function accounts(){
        return view('dashboard-accounts');
    }
}
