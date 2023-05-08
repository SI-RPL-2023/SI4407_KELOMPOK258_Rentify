<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_property' => 'required',
                'id_user' => 'required',
            ]);
    
            Favorite::create([
                'id_property' => $request->id_property,
                'id_user' => Auth::id(),
            ]);
    
            return back()->with('success', 'Property ditambahkan ke favorit');
        } catch (\Throwable $th) {
            return back()->withInput()->withErrors(['msg' => $th->getMessage()]);
        }
    }

    

    public function destroy($id)
    {
        try {
           
        $property = Favorite::find($id);
        unlink("storage/$property->image");
        $property->delete();
        return back()->with('success', 'Property berhasil dihapus dari favorit');
    } catch (\Throwable $th) {
        return back()->withInput()->withErrors(['msg' => $th->getMessage()]);
    }
}
}