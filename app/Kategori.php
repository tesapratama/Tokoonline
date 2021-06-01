<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama_kategori'
    ];
}

