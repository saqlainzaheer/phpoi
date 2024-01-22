<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getResumeAttribute($value)
    {
        return env('APP_URL') . 'uploads/' . $value;
    }
    public function jobPosition()
    {
        return $this->belongsTo(JobPosition::class,'job_id');
    }
}
