<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Project extends Model
{
    protected $fillable =[
        'title',
        'description',
        'image',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at'=>'datetime'
    ];

//    public function categories()
//    {
//        return $this->belongsToMany(Category::class);
//    }
//
//    protected function featuredImage(): Attribute
//    {
//        return Attribute::make(
//            get: fn ($value) => $value ?? '/images/default-project.jpg'
//        );
//    }
}
