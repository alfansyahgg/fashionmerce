<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = [
            [
                'id' => 1,
                'image' => 'produk1',
                'nama' =>'PDH Dinas Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],
            [
                'id' => 2,
                'image' => 'produk2',
                'nama' =>'Jas Hujan Lantas Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],[
                'id' => 3,
                'image' => 'produk3',
                'nama' =>'PDL I GASUM Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],
        ];

        return view('home', compact('data'));
    }

    public function tentang(){
        return view('about');
    }

    public function kontak(){
        return view('contact');
    }

    public function produk(){

        $data = [
            [
                'id' => 1,
                'image' => 'produk1',
                'nama' =>'PDH Dinas Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],
            [
                'id' => 2,
                'image' => 'produk2',
                'nama' =>'Jas Hujan Lantas Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],[
                'id' => 3,
                'image' => 'produk3',
                'nama' =>'PDL I GASUM Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],[
                'id' => 4,
                'image' => 'produk4',
                'nama' =>'PDH II Brimob Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],[
                'id' => 5,
                'image' => 'produk5',
                'nama' =>'PET DISHAR PRIA Polri',
                'kategori' => 'kategori2',
                'harga' => 999999
            ],[
                'id' => 6,
                'image' => 'produk6',
                'nama' =>'PET DISUP WANITA Polri',
                'kategori' => 'kategori2',
                'harga' => 999999
            ],[
                'id' => 7,
                'image' => 'produk7',
                'nama' =>'PETR LANTAS Wanita Polri',
                'kategori' => 'kategori2',
                'harga' => 999999
            ],[
                'id' => 8,
                'image' => 'produk8',
                'nama' =>'Rompi Lantas Polri',
                'kategori' => 'kategori3',
                'harga' => 999999
            ],
            [
                'id' => 9,
                'image' => 'produk9',
                'nama' =>'Batik Korpri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],
            [
                'id' => 10,
                'image' => 'produk10',
                'nama' =>'T-Shirt Polri',
                'kategori' => 'kategori1',
                'harga' => 999999
            ],
        ];

        // echo "<pre>";print_r(($data));exit();

        return view('products', compact('data'));
    }

}
