<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Writer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fiilable =[
        'writer_id',
        'name',
        'slug',
        'bio',
    ];

    public function Blogs(): BelongsToMany
    {
      return $this->belongsToMany(Blog::class);
            
    }
}
