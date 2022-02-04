<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $allData = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->join('gambars', 'produks.produk_id', '=', 'gambars.produk_id')->select('produks.produk_id', 'gambars.gambar')->orderBy('produks.produk_id')->get();
        $data = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->select('produks.*', 'kategoris.nama as nama_kategori')->limit(6)->get();
        $gambars = DB::table('gambars')->select('produk_id', DB::raw('min(gambar) as gambar'))->groupBy('produk_id')->get();

        foreach($data as $dt){
            foreach($gambars as $gbr){
                if($dt->produk_id == $gbr->produk_id){
                    $dt->gambar = $gbr->gambar;
                } 
            }
        }

        // print_r(Auth::user());exit();

        return view('home', compact('data', 'allData'));
    }

    public function tentang(){
        return view('about');
    }

    public function kontak(){
        return view('contact');
    }

    public function produk(){

        $allData = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->join('gambars', 'produks.produk_id', '=', 'gambars.produk_id', 'left')->select('produks.produk_id', 'gambars.gambar')->orderBy('produks.produk_id')->get();
        $data = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->select('produks.*', 'kategoris.nama as nama_kategori')->get();
        $gambars = DB::table('gambars')->join('produks', 'gambars.produk_id', '=', 'produks.produk_id', 'right')->select('produks.produk_id', DB::raw('min(gambar) as gambar'))->groupBy('produks.produk_id')->get();
        $kategoris = KategoriModel::all();

        foreach($data as $dt){
            foreach($gambars as $gbr){
                if($dt->produk_id == $gbr->produk_id){
                    $dt->gambar = $gbr->gambar;
                }
                if(!isset($gbr->gambar)){
                    $gbr->gambar = "no-image.png";
                }
            }
        }

        foreach($allData as $ad){
            if(!isset($ad->gambar)){
                $ad->gambar = "no-image.png";
            }
        }

        $data = $this->paginate($data);
        $data->withPath('produk');
        
        // echo "<pre>";print_r($allData);exit();

        return view('products', compact('data', 'kategoris' ,'allData'));
    }

    public function produkId($slug){

        
        $data = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->join('gambars', 'produks.produk_id', '=', 'gambars.produk_id', 'left')->where('produks.slug', $slug)->select('produks.*', 'kategoris.nama as nama_kategori', 'gambars.gambar')->get();
        $kategoris = KategoriModel::all();

        $allData = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->join('gambars', 'produks.produk_id', '=', 'gambars.produk_id', 'left')->select('produks.produk_id', 'gambars.gambar')->orderBy('produks.produk_id')->get();
        $datas = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->select('produks.*', 'kategoris.nama as nama_kategori')->limit(3)->get();
        $gambars = DB::table('gambars')->join('produks', 'gambars.produk_id', '=', 'produks.produk_id', 'right')->select('produks.produk_id', DB::raw('min(gambar) as gambar'))->groupBy('produks.produk_id')->get();

        foreach($data as $dt){
            if(!isset($dt->gambar)){
                $dt->gambar = "no-image.png";
            }
        }

        foreach($datas as $dt){
            foreach($gambars as $gbr){
                if($dt->produk_id == $gbr->produk_id){
                    $dt->gambar = $gbr->gambar;
                }
                if(!isset($gbr->gambar)){
                    $gbr->gambar = "no-image.png";
                }
            }
        }

        foreach($allData as $ad){
            if(!isset($ad->gambar)){
                $ad->gambar = "no-image.png";
            }
        }
          
        // echo "<pre>";print_r($datas);exit();

        return view('single_product', compact('data', 'kategoris', 'datas', 'allData'));
    }

    public function produkKategori($kategori){

        $allData = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->join('gambars', 'produks.produk_id', '=', 'gambars.produk_id', 'left')->select('produks.produk_id', 'gambars.gambar')->orderBy('produks.produk_id')->get();
        $data = DB::table('produks')->join('kategoris', 'produks.kategori_id', '=', 'kategoris.kategori_id')->where('kategoris.nama', $kategori)->select('produks.*', 'kategoris.nama as nama_kategori')->get();
        $gambars = DB::table('gambars')->join('produks', 'gambars.produk_id', '=', 'produks.produk_id', 'right')->select('produks.produk_id', DB::raw('min(gambar) as gambar'))->groupBy('produks.produk_id')->get();
        $kategoris = KategoriModel::all();

        foreach($data as $dt){
            foreach($gambars as $gbr){
                if($dt->produk_id == $gbr->produk_id){
                    $dt->gambar = $gbr->gambar;
                }
                if(!isset($gbr->gambar)){
                    $gbr->gambar = "no-image.png";
                }
            }
        }

        foreach($allData as $ad){
            if(!isset($ad->gambar)){
                $ad->gambar = "no-image.png";
            }
        }
        
        // echo "<pre>";print_r($allData);exit();

        $data = $this->paginate($data);
        $data->withPath('produk/kategori');

        return view('products', compact('data', 'kategoris', 'allData'));
    }

    public function myprofile($id){

        $user = Auth::user();
        $level = $user->level;
        if($level == 'admin'){
            return redirect()->back();
        }

        $data['datas'] = User::find($id);

        return view('myprofile', with($data));
    }

    public function updateProfile(Request $request, $id){
        $input = $request->all();

        $model = User::find($id);
        $model->update($input);
        return redirect()->route('home.myprofile');
    }

    public function paginate($items, $perPage = 6, $page = null, $options = [])
    {
        $page = $page ?: (PaginationPaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
