<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\KategoriModel;
use App\Models\ProdukModel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $jmlProduk = ProdukModel::all()->count();
        $jmlKategori = KategoriModel::all()->count();
        $jmlUser = User::all()->count();

        $informasis = InformasiModel::first();

        return view('admin/dashboard', compact('jmlProduk', 'jmlKategori', 'jmlUser', 'informasis'));
    }

    public function webinfo(Request $request){
        $input = $request->all();
        $model = InformasiModel::find(1);
        // echo "<pre>";print_r($model);exit();
        $model->update($input);

        return redirect()->route('admin.index');
    }

    

}
