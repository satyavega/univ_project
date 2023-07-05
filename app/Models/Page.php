<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'header', 'detail', 'published_at'
    ];

    // Definisikan relasi atau metode lain di sini jika diperlukan

}
