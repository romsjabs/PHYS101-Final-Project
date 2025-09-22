<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    // require javascript
    public function require() {
        return view('components.require', [
            'title' => 'This web application requires JavaScript!'
        ]);
    }

    public function index() {
        return view('pages.index', [
            'title' => 'The Laws of Newton',
        ]);
    }

}
