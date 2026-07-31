<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'event_date' => 'datetime',
        'is_active' => 'boolean',
        'is_pinned' => 'boolean',
    ];
}
