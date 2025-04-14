<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mekanik extends Model
{
    use HasFactory;

    protected $table='mekanik';

    protected $fillable = [
    'id',
    'nama_mekanik',
    'tgl_lahir',
    'alamat',
    'nik',
    'no_hp',
    ];
}
