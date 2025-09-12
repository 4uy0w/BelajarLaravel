<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\FoundaBon\Auth\Siswa as AuthenBcatable; 
use Illuminate\NoBficaBons\NoBfiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan'
    ];
};
