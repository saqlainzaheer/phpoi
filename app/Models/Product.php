<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getImageAttribute($value)
    {
        return env('APP_URL') . 'uploads/' . $value;
    }

    public function getPdfFileAttribute($value)
    {
        return env('APP_URL') . 'uploads/' . $value;
    }

}
