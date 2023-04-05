<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $results = Property::where('column_name', 'like', '%' . $searchTerm . '%')->get();
        return view('search-results', compact('results'));
    }
}
