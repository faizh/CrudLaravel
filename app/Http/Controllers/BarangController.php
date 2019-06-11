<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
    	$barang=DB::table('barang')->get();
    	return view('Barang.index',['barang'=>$barang]);
    }

    public function tambah(){
    	return view('Barang.tambah');
    }

    public function store(Request $request){
    	DB::table('barang')->insert([
    		'kode_barang'=>$request->kode,
    		'nama_barang'=>$request->nama,
    		'harga'=>$request->harga
    	]);
    	return redirect('barang');
    }

    public function edit($id){
    	$barang=DB::table('barang')->where('id',$id)->get();
    	return view('Barang.edit',['barang'=>$barang]);
    }

    public function update(Request $request, $id){
    	DB::table('barang')->where('id',$request->id)->update([
    		'kode_barang'=>$request->kode,
    		'nama_barang'=>$request->nama,
    		'harga'=>$request->harga
    	]);
    	return redirect('barang');
    }

    public function delete($id){
    	DB::table('barang')->where('id',$id)->delete();
    	return redirect('barang');
    }
}
