<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategoris = KategoriModel::all();
        $produks = DB::table('produks')->join('kategoris', 'produks.kategori_id', 'kategoris.kategori_id')->select("produks.*", "kategoris.nama as nama_kategori")->get();
        $produks = json_decode(json_encode($produks), true);

        return view('admin/produk', compact('produks', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $input['slug'] = strtolower(implode('-', explode(' ', $input['nama'])));
        $input['nama'] = strtoupper($input['nama']);
        ProdukModel::create($input);
        
        return redirect()->route('produk.index')->with('tambah', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukModel  $produkModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukModel $produkModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukModel  $produkModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = ProdukModel::find($id);
        $kategoris = KategoriModel::all();
        return view('admin.produk_edit', compact('produks', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukModel  $produkModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $model = ProdukModel::find($id);
        $model->update($input);
        return redirect()->route('produk.index')->with('update', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukModel  $produkModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ProdukModel::find($id);
        $model->delete();
        return redirect()->route('produk.index')->with('hapus', '1');
    }
}
