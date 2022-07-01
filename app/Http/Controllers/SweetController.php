<?php

namespace App\Http\Controllers;

use App\Models\Sweet;

class SweetController extends Controller
{
    public function index()
    {
        // Just count number of likes here
        return view('sweets', [
            'sweets' => Sweet::withCount('likes')->get()
        ]);
    }
}
