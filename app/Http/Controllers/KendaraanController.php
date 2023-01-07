<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KendaraanController extends Controller
{

    public function index()
    {
        $data_kendaraan = Kendaraan::paginate(10);
        return view('admin.kendaraan.index', compact('data_kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pegawai = User::all();
        return view('admin.kendaraan.create', compact('data_pegawai'));
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
            'nama_kendaraan' => 'required|max:255',
            'merk_type' => 'required|max:255',
            'warna' => 'max:255',
            'nomor_polisi' => 'max:255',
            'tahun_pembuatan' => 'max:255',
            'tahun_pengadaan' => 'max:255',
            'nomor_rangka' => 'max:255',
            'nomor_mesin' => 'max:255',
            'nomor_bpkb' => 'max:255',
        ]);
        Kendaraan::create($validatedData);
        $request->session()->flash('success', 'Success!');
        if(Auth::check()){
            return redirect('kendaraan');
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
        $data = Kendaraan::findOrFail($id);
        return view('admin.kendaraan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kendaraan::findOrFail($id);
        $data_pegawai = User::all(); 
        return view('admin.kendaraan.edit', compact('data', 'data_pegawai'));
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
            'user_id' => 'required|max:255',
            'nama_kendaraan' => 'required|max:255',
            'merk_type' => 'required|max:255',
            'warna' => 'required|max:255',
            'nomor_polisi' => 'required|max:255',
            'tahun_pembuatan' => 'required|max:255',
            'tahun_pengadaan' => 'required|max:255',
            'nomor_rangka' => 'required|max:255',
            'nomor_mesin' => 'required|max:255',
            'nomor_bpkb' => 'required|max:255',
        ]);
        $data_kendaraan = Kendaraan::findOrFail($id);
        $data_kendaraan->update($validatedData);
        $request->session()->flash('success', 'Success!');
        return redirect('kendaraan'); 
    }

    public function destroy($id)
    {
        $data_kendaraan = Kendaraan::findOrFail($id);
        $data_kendaraan->delete();
        if($data_kendaraan){
            return redirect('kendaraan')->with('success', 'Data telah dihapus!');
        }else{
            return redirect('kendaraan')->with('error', 'Error! Gagal hapus');
        }
    }
    public function bast_kendaraan($id){
        $data = Kendaraan::findOrFail($id);
        return view('admin.layouts.bast_kendaraan', compact('data'));
    }
    public function export_kendaraan(){
        $data_kendaraan = Kendaraan::all();
        $data_pegawai = User::all();
        if(Auth::user()->utype == 'SA'){
            return view('admin.kendaraan.export_kendaraan', compact('data_kendaraan','data_pegawai'));
        }else{
            return redirect('dashboard');
        }
    }
}
