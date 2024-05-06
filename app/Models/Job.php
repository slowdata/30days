<?php

namespace App\Models;

use Database\Factories\JobListingsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public static function newFactory(): Factory
    {
        return JobListingsFactory::new();
    }


}
