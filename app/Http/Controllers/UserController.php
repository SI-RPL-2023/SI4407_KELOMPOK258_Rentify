<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('nama', 'password'))) {
            return redirect('/')->with('success', 'Login Berhasil');
        }

        return back()->withErrors([
            'wrong' => 'Username atau password anda salah',
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'access_type' => 'required',
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
            'access_type' => $request->access_type
        ]);

        return redirect('/login');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            
        ]);
        if (Hash::check($request->password, Auth::user()->password)) {
            User::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'password' => bcrypt($request->password),
                'nama' => $request->nama,
                
            ]);

            return redirect('/')->with('success', 'Data berhasil diubah');
        } else {
            return back()->withErrors([
                'wrong' => 'Password anda salah',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            // User not found
            return redirect()->back()->with('error', 'User not found.');
        }

        // Delete the user
        $user->delete();

        return back()->withInput()->with('success', 'User deleted successfully.');
    }
}
