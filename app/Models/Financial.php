<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'type',        // 'income' or 'expense'
        'amount',      // numeric value
        'date',        // transaction date
        'description', // optional text
    ];
}

