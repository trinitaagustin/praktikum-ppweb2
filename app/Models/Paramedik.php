<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    use HasFactory;

    protected $table = 'paramedik'; // nama tabel di database

    public $timestamps = false; // karena tidak ada created_at dan updated_at

    protected $fillable = [
        'id',
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telpon',
        'alamat',
        'unit_kerja_id'
    ];
}
