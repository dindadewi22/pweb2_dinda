<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    // public $timestamps=false;
    // protected $fillabe = ['nama', 'kelas', 'jurusan'];
    protected $table = 'tb_mahasiswa';
    protected $guarded = [];
}
