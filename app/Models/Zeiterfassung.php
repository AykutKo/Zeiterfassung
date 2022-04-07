<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Zeiterfassung extends Model
{
    use HasFactory;

    protected $fillable = [
        'startDate',
        'endDate',
        'taetigkeit',
        'bemerkung'
    ];

    protected $casts = [
        'startDate' => 'datetime',
        'endDate' => 'datetime'
    ];
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
