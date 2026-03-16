<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // protected $fillable = ['slug','title','author','body'];
    protected $guarded = ['id','created_at','updated_at'];
    use HasFactory;
}
