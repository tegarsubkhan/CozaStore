<?php

namespace App\Http\Controllers;

use App\Transaksi;

class OrderController extends Controller
{
    public function index()
    {
        $data['orders'] = Transaksi::where('user_id', auth()->user()->id)->get();
        return view('order', $data);
    }
}
