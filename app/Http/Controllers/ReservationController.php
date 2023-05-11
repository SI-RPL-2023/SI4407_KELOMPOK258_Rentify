<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $price = Property::find($request->id_property);
        $request->validate([
            'id_property' => 'required',
            
            'tanggal_sewa' => 'required',
            'durasi' => 'required',
            
            
        ]);

        Reservation::create([
            'id_property' => $request->id_property,
            'id_user' => Auth::id(),
            'tanggal_sewa' => $request->tanggal_sewa,
            'durasi' => $request->durasi,
            'total' => $request->durasi * $price->price,
            
        ]);

        $id = $request->id_property;
        return redirect()->route('payment', ['id' => $id])->with('success', 'Reservasi berhasil');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            'tanggal_sewa' => 'required',
            'durasi' => 'required',
            
        ]);


        $property = Reservation::find($id);
        
        $property->update([
            'id_property' => $request->id_property,
            'id_user' => Auth::id(),
            'tanggal_sewa' => $request->tanggal_sewa,
            'durasi' => $request->durasi,
            
        ]);
        return redirect('/history')->with('success', 'Reservasi berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Reservation::find($id);
        
        $property->delete();
        return redirect('/history')->with('success', 'Reservasi berhasil dihapus');
    }
}
