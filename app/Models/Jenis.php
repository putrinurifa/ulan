<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Convection;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';

    public function convection()
    {
        return $this->hasMany(Convection::Class);
    }
}
