<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('Admin.Dashboard', ['users' => $user]);
    }

    public function transaction()
    {
        $transaction = Transaction::all();
        return view('Admin.Transaction', ['transaction' => $transaction]);
    }
    public function destroyUser(Request $request)
    {
        $flight = User::where('id', $request->id)->first();
        $flight->delete();
        return redirect()->route('dashboard');
    }
}
