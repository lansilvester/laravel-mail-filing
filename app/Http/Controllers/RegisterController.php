<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'Register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'nip'=>'required|max:20',
            'nomor_hp'=>'required|max:15',
            'jabatan'=>'required|max:255',
            'utype'=>'max:255',
            'photo'=>'image|file|max:3024',
            'password'=>'required|min:5|max:255'
        ]);    
        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('profile-images');
        }
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success','Success!');
        if(Auth::check()){
            return redirect('pegawai');
        }else{
            return redirect('login');
        }
    }
}
