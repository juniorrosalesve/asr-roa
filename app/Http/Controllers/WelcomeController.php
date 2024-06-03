<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'productos' => Producto::all()
        ]);
    }
}
