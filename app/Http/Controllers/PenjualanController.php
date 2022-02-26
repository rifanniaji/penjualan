<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PenjualanController extends Controller
{
    public function index(Request $request)
    {
    	$penjualan = DB::table('penjualan')->get();
    	return view('index',['penjualan' => $penjualan]);
    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function store(Request $request)
    {
    	DB::beginTransaction();
    	DB::table('penjualan')->insert([
			'no_penjualan' => $request->no_penjualan,
			'tgl_penjualan' => $request->tgl_penjualan,
			'nama_pelanggan' => $request->nama_pelanggan,
			'ppn' => $request->ppn,
			'npwp_pelanggan' => $request->npwp,
			'id_user' => $request->id_user
public function update(Request $request)
{
	
		DB::table('penjualan')->where('penjualan',$request->id)->update([
			'no_penjualan' => $request->no_penjualan,
			'tgl_penjualan' => $request->tgl_penjualan,
			'nama_pelanggan' => $request->nama_pelanggan,
			'ppn' => $request->ppn,
			'npwp_pelanggan' => $request->npwp,
			'id_user' => $request->id_user
		]);
	
	return redirect('/penjualan');
}
			
		]);
		DB::commit();
	return redirect('/penjualan');
    }

    public function edit($id)
    {
    	$penjualane = DB::table('penjualan')->where('id',$id)->get();
    	return view('edit',['penjualan' => $penjualane]);
    }

    public function update($id)
    {
    	DB::beginTransaction();
    	
public function update(Request $request)
{
	
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
    	DB::commit();
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function penjualan_detail($id)
    {
    	$penjualan_detail = DB::table('penjualan_detail')->where('id_penjualan',$id)->get();
    	return view('penjualan_detail',['penjualan_detail' => $penjualan_detail]);
    }

    public function penjualan_detail_tambah()
    {
    	return view('penjualan_detail_tambah');
    }

    public function store_detail($id)
    {
    	DB::beginTransaction();
    	DB::table('penjualan_detail')->insert([
			'id_penjualan' => $id,
			'deskripsi' => $request->deskripsi,
			'qty' => $request->qty,
			'harga' => $request->harga,
			'created_at' => date()
		]);
		DB::commit();
    }
	
}
