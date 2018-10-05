<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //deklarasi variabel untuk pengisian data, $fillable agar dapat diisi masal
    protected $fillable = [
        'name','slug'
    ];
}
