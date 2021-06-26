<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convection extends Model
{
    use HasFactory;

    protected $table = "convection";
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'jenis',
        'jumlah',
        'harga',
        'no_handphone',
    ];
};
