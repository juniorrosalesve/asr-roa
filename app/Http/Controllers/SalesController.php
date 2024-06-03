<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class SalesController extends Controller
{
    public function index(Request $r) {
        return view('dashboard');
    }
}
