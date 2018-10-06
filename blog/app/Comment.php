<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //must asigment dari controller
    protected $fillable = [
        //field yang boleh diisi harus didaftarkan
        'post_id',
        'user_id',
        'message'
    ];

    //invers dari relasi Post
    public function post()
    {
        //membuat relasi 
        return $this->belongsTo(Post::class);
    }
}
