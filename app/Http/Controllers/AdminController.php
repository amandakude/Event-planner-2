<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    // Middleware
    public function __construct() {
        // only Admin have access
        $this->middleware('admin');
    }
    
    public function __invoke() {
        return view('admin');
    }    
}
