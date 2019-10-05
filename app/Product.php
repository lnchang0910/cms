<?php

namespace App;
use Storage;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table      = 'products';
    protected $primaryKey = 'id';

    public function getImageUrlAttribute()
    {
        return Storage::disk('admin')->url($this->attributes['image']);
    }
}
