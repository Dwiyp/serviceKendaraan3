<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'mekanik';

    protected $fillable = [
        'keluhan',
        'tgl_masuk',
        'tgl_keluar',
    ];
}
