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
        'kommen',
        'gehen',
        'taetigkeit',
        'bemerkung',
        'user_id'
    ];

    protected $casts = [
        'startDate' => 'datetime',
        'endDate' => 'datetime',
        'kommen' => 'datetime',
        'gehen' => 'datetime',
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
