<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            'rating' => 'required',
            'review' => 'required'
            
        ]);

        Review::create([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);


        return redirect('/history')->with('success', 'Property ditambahkan ke favorit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            'rating' => 'required',
            'review' => 'required'
        ]);


        $property = Review::find($id);
        
        $property->update([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
        return redirect('/product')->with('success', 'Property berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Review::find($id);
        
        $property->delete();
        return redirect('/product')->with('success', 'Property berhasil dihapus');
    }
}
