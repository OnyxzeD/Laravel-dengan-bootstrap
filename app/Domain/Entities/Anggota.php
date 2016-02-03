<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = ['id', 'nama', 'alamat', 'kota', 'no_telp', 'tgl_lahir', 'tgl_daftar'];

    protected $primaryKey = 'id';
}
