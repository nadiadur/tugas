<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $tabke = "guru";
    protected $fillable = ['nama', 'alamat', 'pengampu', 'telpon'];
}
