<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $data = Property::where('lokasi', 'like', '%' . $searchTerm . '%')->get();
        return view('property', compact('data'));
    }
}
