<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid', 'check_in_date_time', 'check_out_date_time',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userid');
    }

    
    
}
