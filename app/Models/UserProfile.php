<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getAadharAttribute($value)    // it's an accessor to modify the response data
    {
        if ($value != null) return env('APP_URL') . $value;
    }

    public function getPanCardAttribute($value)    // it's an accessor to modify the response data
    {
        if ($value != null) return env('APP_URL') . $value;
    }
}
