<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            
        ]);

        History::create([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
        ]);




        return redirect('/product');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
        ]);


        $property = History::find($id);
        unlink("storage/$property->image");
        $property->update([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
        ]);
        return redirect('/product');
    }

    public function destroy($id)
    {
        $property = History::find($id);
        unlink("storage/$property->image");
        $property->delete();
        return redirect('/product');
    }
}
