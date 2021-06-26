<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class HalamanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eloquent untuk menampilkan data dengan pagination
        $admins = Admin::paginate(5);
        return view('admin.home', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi request
        $request->validate([
            'id' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'no_handphone' => 'required',
        ]);

        //eloquent untuk insert data
        Admin::create($request->all());

        //jika berhasil, kembalike halaman utama
        return redirect()->route('admin.index')->with('success', 'Pesanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //eloquent untuk mengambil 1 data yang sesuai dalam bentuk objek
        $admin = Admin::find($id);

        //eloquent untuk mengambil data sebelum dan sesudah data sekarang
        $next = Admin::where('id', '<', $id)->orderBy('id','desc')->first();
        $prev = Admin::where('id', '>', $id)->orderBy('id')->first();

        return view('admin.detail', compact('admin', 'prev', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //eloquent untuk mengambil 1 data yang sesuai dalam bentuk objek
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
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
        //validasi request
        $request->validate([
            'id' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'no_handphone' => 'required',
        ]);

        //eloquent untuk insert data
        Admin::find($id)->update($request->all());

        //jika berhasil, kembalike halaman utama
        return redirect()->route('admin.index')->with('success', 'Pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eloquent untuk menghapus data
        Admin::find($id)->delete();


        //jika berhasil, kembalike halaman utama
        return redirect()->route('admin.index')->with('success', 'Pesanan berhasil dihapus');
    }

    public function search(Request $request)
    {
        $admins = Admin::when($request->keyword, function ($query) use ($request) {
            $query->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('jenis', 'like', "%{$request->keyword}%")
                ->orWhere('jumlah', 'like', "%{$request->keyword}%")
                ->orWhere('harga', 'like', "%{$request->keyword}%");
        })->paginate(5);
        $admins->appends($request->only('keyword'));
        return view('admin.home', compact('admins'));
    }
}
