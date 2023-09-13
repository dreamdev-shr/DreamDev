<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return redirect('/#portfolio');
    }

    public function portfolio_details () {
        return view('portfolio_details');
    }
}
