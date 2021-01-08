<?php 

namespace App\Models;
use Illuminate\Support\Str;

class Produk extends Model{
	protected $table = 'produk';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime'];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getTanggalProdukAttribute(){
		$tanggal = $this->created_at;
		return strftime("%d %B %Y", strtotime($this->created_at));
	}

	function handleUpload(){
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();
		}
	}
}