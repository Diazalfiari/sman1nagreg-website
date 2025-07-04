<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'schedule_date',
        'start_time',
        'end_time',
        'class',
        'subject',
        'teacher',
        'file',
    ];

    protected function casts(): array
    {
        return [
            'schedule_date' => 'date',
            'start_time' => 'datetime:H:i',
            'end_time' => 'datetime:H:i',
        ];
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('schedule_date', '>=', now()->toDateString());
    }
}