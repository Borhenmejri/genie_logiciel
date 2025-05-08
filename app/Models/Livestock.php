<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    protected $fillable = [
        'type', 'age', 'location', 'health_status', 'feeding_schedule', 'created_at', 'updated_at',
    ];
    public $timestamps = true;
}
