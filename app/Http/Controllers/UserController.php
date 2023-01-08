<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }

    public function setType(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'no_hp' => 'required',
            'tanggal_pemesanan' => 'required',
            'pembayaran' => 'required'
        ]);
        $transaction = new Transaction([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'pembayaran' => $request->pembayaran,
            'paket' => $request->paket,

        ]);
        $transaction->save();
        $user->type = $request['paket'];
        $user->save();
        return redirect()->route('index');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Regsitration Success');
    }

    public function update(Request $request){
        User::where('id',Auth::user()->id)->update(['name'=>$request->name,'password'=>Hash::make($request->password)]);
        return redirect()->route("profile");
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth()->user()->role == 'admin') {
                return redirect()->intended(route('dashboard'));
            }
            if (Auth()->user()->role == 'dokter') {
                return redirect()->intended(route('dokter.konsultasi'));
            }
            return redirect()->intended('/');
        }
        return back()->withErrors("email atau password salah");
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
