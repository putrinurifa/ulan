<?php

namespace App\Http\Controllers;

use App\Models\Convection;
use Illuminate\Http\Request;

class ConvectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eloquent untuk menampilkan data dengan pagination
        $convections = Convection::paginate(5);
        return view('convection.home', compact('convections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        
        return view('convection.dashboard');
    
    }

    public function create()
    {
        
        return view('convection.create');
    
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
        Convection::create($request->all());

        //jika berhasil, kembalike halaman utama
        return redirect()->route('convection.index')->with('success', 'Convection berhasil ditambahkan');
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
        $convection = Convection::find($id);

        //eloquent untuk mengambil data sebelum dan sesudah data sekarang
        $next = Convection::where('id', '<', $id)->orderBy('id','desc')->first();
        $prev = Convection::where('id', '>', $id)->orderBy('id')->first();

        return view('convection.detail', compact('convection', 'prev', 'next'));
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
        $convection = Convection::find($id);
        return view('convection.edit', compact('convection'));
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
        Convection::find($id)->update($request->all());

        //jika berhasil, kembalike halaman utama
        return redirect()->route('convection.index')->with('success', 'convection berhasil diupdate');
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
        Convection::find($id)->delete();


        //jika berhasil, kembalike halaman utama
        return redirect()->route('convection.index')->with('success', 'convection berhasil dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $convections = Convection::where('id' , $keyword )->paginate(5);
        return view('convection.home', compact('convections'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
