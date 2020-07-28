<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image'
    ];

    //Sets up the one to one relationship with image and project
    public function Project()
    {
        $this->hasOne(Project::class);
    }
}