<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::all();
        return view('aboutUs', compact ('ratings'));
    }

    public function showAllRating()
    {
        $ratings = Rating::all();
        return view('rating', compact('ratings'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'star' => 'required|integer|max:5',
            'comment' => 'required|string|max:100'
        ]);

        Rating::create($validated);

        return redirect('aboutUs');
    }

    public function create()
    {
        $ratings = Rating::all();
        return view('formAddRating', compact('ratings'));
    }

    public function destroy($id)
    {
        $rating = Rating::findOrFail($id);
        $rating->delete();

        return redirect()->route('rating.showAllRating');
    }

    public function edit($id)
    {
        $rating = Rating::findOrFail($id);
        return view('editRating', compact('rating'));
    }

    public function update(Request $request, $id)
    {
        $rating = Rating::findOrFail($id);

        $validated = $request->validate([
            'star' => 'required|integer|max:5',
            'comment' => 'required|string|max:100'
        ]);
        

        $rating->update($validated);

        return redirect()->route('rating.showAllRating');
    }
}
