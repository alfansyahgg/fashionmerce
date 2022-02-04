<?php

namespace App\Http\Controllers;

use App\Models\GambarProdukModel;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GambarProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas'] = DB::table('produks')->select('*')->get();
        $data['gambars'] = DB::table('gambars')->join('produks','gambars.produk_id','=','produks.produk_id', 'right')->selectRaw('produks.produk_id,count(gambars.id) as jml')->groupBy('produks.produk_id')->get();

        // echo "<pre>";print_r($data['gambars']);exit();

        return view('admin.gambar_produk', with($data));
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

        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,gif|max:5128'
            ]);

        if($request->file('file')){
            $image = $request->file('file');
            $destinationPath = 'assets/img/produk/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['gambar'] = $imageName;
        }

        GambarProdukModel::create($input);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GambarProdukModel  $gambarProdukModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['produk'] = ProdukModel::find($id);
        $data['datas'] = GambarProdukModel::where('produk_id', $id)->get();

        // echo "<pre>";print_r($data['datas']);exit();

        return view('admin.gambar_produk_ubah', with($data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GambarProdukModel  $gambarProdukModel
     * @return \Illuminate\Http\Response
     */
    public function edit(GambarProdukModel $gambarProdukModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GambarProdukModel  $gambarProdukModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,gif|max:5128'
            ]);
            
        if($request->file('file')){
            $image = $request->file('file');
            $destinationPath = 'uploads/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['gambar'] = $imageName;
        }

        $model = GambarProdukModel::find($id);

        $model->update($input);

        return redirect()->route('gambar_produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GambarProdukModel  $gambarProdukModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = GambarProdukModel::find($id);
        $model->delete();
        return redirect()->back();
    }
}
