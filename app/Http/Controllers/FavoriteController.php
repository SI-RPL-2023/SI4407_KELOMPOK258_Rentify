<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            
        ]);

        Favorite::create([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
        ]);




        return redirect('/product')->with('success', 'Property ditambahkan ke favorit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
        ]);


        $property = Favorite::find($id);
        unlink("storage/$property->image");
        $property->update([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
        ]);
        return redirect('/product')->with('success', 'Property berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Favorite::find($id);
        unlink("storage/$property->image");
        $property->delete();
        return redirect('/product')->with('success', 'Property berhasil dihapus');
    }
}
