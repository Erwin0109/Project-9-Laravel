<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;

class ClientController extends Controller{
	function showHome(){
		$data['list_produk'] = Produk::all();
		$data['list_kategori'] = Kategori::all();
		return view('client.home', $data);
	}
	function showAbout(){
		return view('client.about');
	}
	function showProduk(){
		$data['list_produk'] = Produk::all();
		return view('client.produk', $data);
	}
	function filter(){
		$nama = request('nama');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('client.produk', $data);
	}
}