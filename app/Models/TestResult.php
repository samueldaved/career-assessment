<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    protected $casts = [
        'discPlusCount' => 'array',
        'discMinusCount' => 'array',
        'discDifferenceCount' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
