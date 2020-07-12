<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogPost;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image'
    ];

    //Sets up the one to one relationship with image and blog_post
    public function BlogPost()
    {
        $this->hasOne(BlogPost::class);
    }
}