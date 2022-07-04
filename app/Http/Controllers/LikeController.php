<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeableRequest;
use Illuminate\Http\RedirectResponse;

class LikeController extends Controller
{
    public function store(LikeableRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $likeable = $validated['model_type']::findOrFail($validated['model_id']);

        $likeable->likes()->where('user_id', auth()->id())->exists() ?
            $likeable->likes()->detach(auth()->id())
            :
            $likeable->likes()->attach(auth()->id());

        return redirect()->back();
    }
}

