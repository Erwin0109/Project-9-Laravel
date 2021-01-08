<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return view('admin.produk.index', $data);
	}
	function create(){
		return view('admin.produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->id_user = request()->user()->id;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stock = request('stock');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUpload();

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);		
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stock = request('stock');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUpload();
		
		return redirect('admin/produk')->with('warning', 'Data Berhasil Diedit');	
	}
	function destroy(Produk $produk){
		$produk->delete();
		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
	}
	function filter(){
		$nama = request('nama');
		// $stock = explode(",", request('stock'));
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::where('nama', '<>', $nama)->get();
		// $data['list_produk'] = Produk::whereIn('stock', $stock)->get();
		// // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		// $data['stock'] = request($stock);

		return view('admin.produk.index', $data);
	}
}