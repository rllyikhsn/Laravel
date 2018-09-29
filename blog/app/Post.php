<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //definisi yang boleh diisikan masal
    protected $fillable = ['title','content','category_id','slug'];
}
