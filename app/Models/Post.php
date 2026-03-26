<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    // protected $fillable = ['slug','title','author','body'];
    protected $guarded = ['id','created_at','updated_at'];
    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
