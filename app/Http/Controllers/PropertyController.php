<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_pemilik' => 'required',
            'property_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'kapasitas' => 'required',
            'lokasi' => 'required',
            'fasilitas' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        Property::create([
            'id_pemilik' => $request->id_pemilik,
            'property_name' => $request->property_name,
            'category' => $request->category,
            'price' => $request->price,
            'availability' => $request->availability,
            'kapasitas' => $request->kapasitas,
            'lokasi' => $request->lokasi,
            'fasilitas' => $request->fasilitas,
            'description' => $request->description,
            'image' => $filename,
        ]);




        return redirect('/my_property')->with('success', 'Berhasil menambahkan property');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pemilik' => 'required',
            'property_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'kapasitas' => 'required',
            'lokasi' => 'required',
            'fasilitas' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        $property = Property::find($id);
        unlink("storage/$property->image");
        $property->update([
            'id_pemilik' => $request->id_pemilik,
            'property_name' => $request->property_name,
            'category' => $request->category,
            'price' => $request->price,
            'availability' => $request->availability,
            'kapasitas' => $request->kapasitas,
            'lokasi' => $request->lokasi,
            'fasilitas' => $request->fasilitas,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect('/my_property')->with('success', 'Property berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        unlink("storage/$property->image");
        $property->delete();
        return redirect('/my_property')->with('success', 'Property berhasil dihapus');
    }

    
}
