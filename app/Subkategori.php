<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = "subkategori";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama_subkategori','id_kategori'
    ];
}
