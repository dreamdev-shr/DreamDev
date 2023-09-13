<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        return redirect('/#services');
    }

    public function services_details () {
        return view('services_details');
    }
}
