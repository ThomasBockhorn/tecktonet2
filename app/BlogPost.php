<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class BlogPost extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'text'
    ];

    //This sets up the one to one relationship with Image
    public function Image()
    {
        $this->belongsTo(Image::class);
    }
}