<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pegawai = User::paginate(4);
        if(Auth::user()->utype == 'SA'){
            return view('admin.pegawai.all', compact('data_pegawai'));
        }else{
            return redirect('dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->utype == 'SA'){
            return view('admin.pegawai.create');
        }else{
            return redirect('dashboard');
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data = User::findOrFail($id);
        if(Auth::user()->utype == 'SA' || Auth::user()->id == $id){
                return view('admin.pegawai.index', compact('data'));
        }else{
            return redirect('dashboard');
        }
    }

    public function edit($id)
    {
        $data_pegawai = User::findOrFail($id);
        return view('admin.pegawai.edit', compact('data_pegawai'));
       
    }
    public function update(Request $request, $id)
    {
        $validatedData = $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email',
            'nip'=>'required|max:20',
            'nomor_hp'=>'required|max:15',
            'jabatan'=>'required|max:255',
            'utype' => 'max:255',
            'photo'=>'image|file|max:3024',
            'password'=>'required|min:5|max:255'
        ]);
        if($request->file('photo')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('profile-images');
        }
        $validatedData['password'] = Hash::make($validatedData['password']);
        $data_pegawai  = User::findOrFail($id);
        $data_pegawai->update($validatedData);
        $request->session()->flash('success','Success!');
        return redirect('pegawai');
    }
    
    public function destroy($id)
    {
            $data_pegawai = User::findOrFail($id);
            if($data_pegawai->photo){
                Storage::delete($data_pegawai->photo);
            }
            $data_pegawai->delete();
            if($data_pegawai){
                return redirect('pegawai')->with('success','Data telah dihapus!');
            }else{
                return redirect('pegawai')->with('error','Error! Gagal hapus!');
            }
    }
    public function export_pegawai(){
        $data_pegawai = User::all();
        if(Auth::user()->utype == 'SA'){
            return view('admin.pegawai.export_pegawai', compact('data_pegawai'));
        }else{
            return redirect('dashboard');
        }
    }
}
