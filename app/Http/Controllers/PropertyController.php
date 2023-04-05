<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'property_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'lokasi' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        Property::create([
            'property_name' => $request->property_name,
            'category' => $request->category,
            'price' => $request->price,
            'availability' => $request->availability,
            'lokasi' => $request->lokasi,
            'description' => $request->description,
            'image' => $filename,
        ]);




        return redirect('/product')->with('success', 'Berhasil menambahkan property');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'property_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'lokasi' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        $property = Property::find($id);
        unlink("storage/$property->image");
        $property->update([
            'property_name' => $request->property_name,
            'category' => $request->category,
            'price' => $request->price,
            'availability' => $request->availability,
            'lokasi' => $request->lokasi,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect('/product')->with('success', 'Property berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        unlink("storage/$property->image");
        $property->delete();
        return redirect('/product')->with('success', 'Property berhasil dihapus');
    }
}
