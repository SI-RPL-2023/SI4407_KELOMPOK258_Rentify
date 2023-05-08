<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class MyPropertyController extends Controller
{
    public function myproperty(Property $property)
{
    $data = $property->id;
    return view('myProperty', compact('data'));
}
}
