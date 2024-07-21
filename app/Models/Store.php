<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'tabel_siswa';
    protected $fillable = ['id','nama', 'alamat' , 'jenis_kelamin' , 'umur' , 'tanggal_lahir'];
    public $timestamps = false;
}