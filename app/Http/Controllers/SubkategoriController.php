<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\subkategori;
use App\kategori;
use Illuminate\Support\Facades\Storage;

class SubkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkategori = DB::table('subkategori')
                    ->join('kategori', 'kategori.id', '=', 'subkategori.id_kategori')
                    ->select('subkategori.*','nama_kategori')
                    ->get();
        $data = array(
            'subkategori' => $subkategori
        );
        return view('subkategori.v_subkategori',['subkategori' => $subkategori]);
        // return view('subkategori.v_subkategori');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'kategori' => kategori::all(),
        );
        return view('subkategori.v_tambah_subkategori',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subkategori = subkategori::create($request->all());
        return redirect('subkategori')->with('sukses','Data Berhasil Di Simpan');
        return redirect('subkategori')->with('gagal','Data Gagal');
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
        $subkategori = subkategori::find($id);
        $kategori = kategori::all();
        return view('subkategori.v_ubah-subkategori',compact('subkategori','id','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('subkategori')->where('id',$request->id)->update([
            'id_kategori' => $request->id_kategori,
            'nama_subkategori' => $request->nama_subkategori
        ]);
        return redirect('subkategori')->with('sukses','Data Berhasil Di Ubah');
        return redirect('subkategori')->with('gagal','Data Gagal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('subkategori')->where('id',$id)->delete();
        return redirect('subkategori')->with('sukses','Data Berhasil Di Hapus');
        return redirect('subkategori')->with('gagal','Data Gagal');
    }
}
