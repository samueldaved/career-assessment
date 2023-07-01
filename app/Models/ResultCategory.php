<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'strength' => 'array',
        'weakness' => 'array',
        'goals' => 'array',
        'difficulties' => 'array',
        'leadershipCharacteristics' => 'array',
        'commonCombination' => 'array'

    ];
}
