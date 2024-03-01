<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function postLogin(Request $request) {
        // if (Auth::attempt($request->only('email', 'username', 'password'))) {
        //     if (Auth::user()->role === 'admin') {
        //         return redirect('/admin'); // Redirect ke dashboard admin
        //     } else {
        //         return redirect('/gallery'); // Redirect ke dashboard pengguna biasa
        //     }
        // } else {
        //     return back()->with('alert', 'Data ada yang salah / Belum terdaftar!');
        // }

        $status = User::where('username', $request->username)->where('status', 1)->first();
        if ($status) {
            if (Auth::attempt($request->only('username', 'password'))) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect('admin');
                }
                return redirect('gallery');
            } else {
                return back()->with('alert', 'Username/Email/Password Salah!!');
            }
        } else {
            return back()->with('alert', 'Anda Belum Di Acc Oleh Admin!!');
        }

    }

    public function postRegister(Request $request) {
        // $email = User::where('email', $request->email)->first();
        // if ($email) {
        //     return back()->with('alert', 'Email sudah terdaftar / password tidak sama!');
        // }

        // if ($request->password == $request->repassword) {
        //     $ins = User::create([
        //         'name'=>$request->name,
        //         'username'=>$request->username,
        //         'email'=>$request->email,
        //         'password'=>bcrypt($request->password),
        //     ]);

        //     Auth::login($ins);
        //     return redirect()->intended('/gallery');
        // }

        // return back();

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        User::create($data);

        return redirect('/');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }   


    public function profile() {
        $gallery = Gallery::where('user_id', Auth::user()->id)->where('status', 'accept')->orderBy('created_at', 'desc')->get();
        return view('profile', compact('gallery'));
    }
    
}