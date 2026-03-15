<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['slug','title','author','body'];
    protected $guarded = ['id','created_at','updated_at'];
}
