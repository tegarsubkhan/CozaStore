<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $data['carts'] = Cart::where('user_id', auth()->user()->id)->get();
        return view('cart', $data);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validate = Validator::make($input, [
            'qty' => 'required',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate->errors())->withInput($input);
        }else {
            $input['barang_id'] = $id;
            $input['user_id'] = auth()->user()->id;

            $query = Cart::updateOrCreate([
                'barang_id' => $id,
                'user_id' => auth()->user()->id
            ], $input);

            if($query){
                return redirect()->back()->with('info', 'Data barang berhasil ditambahkan kedalam cart');
            }else{
                return redirect()->back()->with('error', 'Data barang gagal ditambahkan kedalam cart');
            }
        }
    }

    public function checkout(Request $request)
    {
        $input = $request->all();

        foreach($input['qty'] as $idCart => $qty){
            $cart = Cart::find($idCart);
            $cart->update(['qty' => $qty]);
        }

        return redirect('/checkout');
    }

    public function destroy($id)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('barang_id', $id);
        $query = $cart->delete();
        if ($query) {
            return redirect()->back()->with('info', 'Data cart berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data cart gagal dihapus.');
        }
    }

    public function create() { return abort(404); }
    public function show($id) { return abort(404); }
    public function store(Request $request) { return abort(404); }
    public function edit($id) { return abort(404); }
}
