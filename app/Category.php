<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category'
    ];

    //This setsup one to many relationship to project
    public function Project()
    {
        $this->belongsTo(Project::class);
    }
}