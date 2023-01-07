<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
 
    public function index()
    {
        $data_barang = Barang::paginate(10);
        return view('admin.barang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pegawai = User::all();
        return view('admin.barang.create', compact('data_pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|max:255',
            'nama_barang' => 'required|max:255',
            'merk_type' => 'required|max:255',
            'nomor_seri' => 'max:255',
            'tahun_pembuatan' => 'max:255',
            'warna' => 'max:255',
            'processor' => 'max:255',
            'memory' => 'max:255',
            'penyimpanan' => 'max:255',
            'ukuran_layar' => 'max:255',
        ]);
        Barang::create($validatedData);
        $request->session()->flash('success', 'Success!');
        if(Auth::check()){
            return redirect('barang');
        }else{
            return redirect('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::findOrFail($id);
        return view('admin.barang.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::findOrFail($id);
        $data_pegawai = User::all(); 
        return view('admin.barang.edit', compact('data', 'data_pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id'=>'required|max:255',
            'nama_barang' => 'required|max:255',
            'merk_type' => 'required|max:255',
            'nomor_seri' => 'max:255',
            'tahun_pembuatan' => 'max:255',
            'warna' => 'max:255',
            'processor' => 'max:255',
            'memory' => 'max:255',
            'penyimpanan' => 'max:255',
            'ukuran_layar' => 'max:255',
        ]);
        $data_barang = Barang::findOrFail($id);
        $data_barang->update($validatedData);
        $request->session()->flash('success', 'Success!');
        return redirect('barang'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_barang = Barang::findOrFail($id);
        $data_barang->delete();
        if($data_barang){
            return redirect('barang')->with('success', 'Data telah dihapus!');
        }else{
            return redirect('barang')->with('error', 'Error! Gagal hapus');
        }
    }
    public function bast($id){
        $data = Barang::findOrFail($id);
        return view('admin.layouts.bast_barang', compact('data'));
    }
    public function export_barang(){
        $data_barang = Barang::all();
        $data_pegawai = User::all();
        if(Auth::user()->utype == 'SA'){
            return view('admin.barang.export_barang', compact('data_barang','data_pegawai'));
        }else{
            return redirect('dashboard');
        }
    }
    public function cari(Request $request){
        $search_keyword = $request->cari;
        $search_by = $request->by;
        if($search_by == 'user_id'){
            $data_barang = Barang::where('name','like',"%".$search_keyword."%")->whereHas('User', function($q){
                $q->where('name', 'Male');
            })->get();
        }else{
            $data_barang = Barang::where($search_by,'like',"%".$search_keyword."%")->paginate(5);
        }
        return view('admin.barang.index', compact('data_barang'));
    }
}
