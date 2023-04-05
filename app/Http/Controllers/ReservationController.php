<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            'tanggal_sewa' => 'required',
            'status_pembayaran' => 'required'
            
        ]);

        Reservation::create([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
            'tanggal_sewa' => $request->tanggal_sewa,
            'status_pembayaran' => $request->status_pembayaran,
        ]);


        return redirect('/history')->with('success', 'Reserrvasi berhasil');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_property' => 'required',
            'id_user' => 'required',
            'tanggal_sewa' => 'required',
            'status_pembayaran' => 'required'
        ]);


        $property = Reservation::find($id);
        
        $property->update([
            'id_property' => $request->id_property,
            'id_user' => $request->id_user,
            'tanggal_sewa' => $request->tanggal_sewa,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        return redirect('/product')->with('success', 'Reservasi berhasil diupdate');
    }

    public function destroy($id)
    {
        $property = Reservation::find($id);
        
        $property->delete();
        return redirect('/product')->with('success', 'Reservasi berhasil dihapus');
    }
}
