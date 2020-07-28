<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'customer', 'rating'
    ];

    //This sets up the one to one relationship with ProjectImage
    public function ProjectImage()
    {
        $this->belongsTo(ProjectImage::class);
    }
}