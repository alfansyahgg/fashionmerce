<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class AuthController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        $informasis = InformasiModel::first();
        return view('login', compact('informasis'));
    }

    public function auth(Request $request){
        if(Auth::check()){ return redirect()->back(); }

        $validateData = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
            );
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect('/');
        }

        return redirect('login')->withError('Gagal untuk login');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function register(){
        $informasis = InformasiModel::first();
        return view('register', compact('informasis'));
    }

    public function regist(Request $request){

        $validateData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone_number' => 'required|min:8',
                'city' => 'required',
                'zip_code' => 'required',
                'address' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required|same:password'
            ]
            );

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return redirect()->route('login')->with('register', '1');
    }
}
