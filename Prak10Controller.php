<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class Prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data dari tabel kategori
        $KData = kategori::get();
        $JRek = kategori::count();

        return view('praktikum10.tugas1', compact('KData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('praktikum10.tugas1create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $psn =[
            'required'=>'Field Harus Diisi', 
        ];
 
        $this->validate($request,[
            'txkat'=>'required',
            'txdesk'=>'required',   
        ],$psn);

        kategori::create([
                'kategori'=>$request->txkat,
                'keteragan'=>$request->txdesk,
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan data yang hendak diubah
        $eDT = kategori::where('id',$id)->first();
        return view('praktikum10.tugas1edit',compact('eDT'));
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
        //proses perubahan data
        kategori::where('id',$id)->update([
            'kategori' => $request->txkat,
            'keteragan' =>$request->txdesk,
        ]);
        return redirect()->route('prak10.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //proses hapus data
        kategori::where('id',$id)->delete();
        return redirect()->route('prak10.index');
    }
}
