<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin_t_users;

class ControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $value=DB::table('admin_t_user')->orderBy('id_user', 'asc')->get();
        // $admin = Admin::getuserData($value);
        // return view('index')->with("admin",$admin);
        $admins = Admin_t_users::all();
        return view('admin/beranda_admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
              'name_user'=>'required',
              'password'=>'required',
              'hak_akses'=>'required',
              'email'=>'required'
          ] );

        $admin = new Admin_t_users([
          'name_user' => $request->get('name_user'),
          'email' => $request->get('email'),
          'password' => $request->get('password'),
          'hak_akses' => $request->get('hak_akses')
        ]);
        $admin->save();
        return redirect('admin/beranda_admin')->with('success','Data Tersimpan !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin/beranda_admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
