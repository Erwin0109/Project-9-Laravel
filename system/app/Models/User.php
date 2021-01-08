<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Produk;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }

    function produk(){
    	return $this->hasMany(Produk::class, 'id_user');
    }

    function getJenisKelaminStringAttribute(){
    	return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
    	$this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value){
    	$this->attributes['username'] = strtolower($value);
    }

    function handleUpload(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/user";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }
}
