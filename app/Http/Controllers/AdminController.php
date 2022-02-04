<?php

namespace App\Http\Controllers;

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

        return view('admin/dashboard', compact('jmlProduk', 'jmlKategori', 'jmlUser'));
    }

    

}
