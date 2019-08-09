<?php

namespace App\Http\Controllers;

use App\Transaksi;

class PaymentInfoController extends Controller
{
    public function index($id)
    {
        $data['transaksi'] = Transaksi::findOrFail($id);
        return view('payment-info', $data);
    }
}

