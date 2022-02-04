<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategoris = KategoriModel::all();

        return view('admin.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        KategoriModel::create($input);
        
        return redirect()->route('kategori.index')->with('tambah', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriModel $kategoriModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriModel $kategoriModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $model = KategoriModel::find($id);
        $model->update($input);
        return redirect()->route('kategori.index')->with('update', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriModel  $kategoriModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KategoriModel::find($id);
        $model->delete();
        return redirect()->route('kategori.index')->with('hapus', '1');
    }
}
