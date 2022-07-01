<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        // Just count number of likes here
        return view('items', [
            'items' => Item::withCount('likes')->get()
        ]);
    }
}
