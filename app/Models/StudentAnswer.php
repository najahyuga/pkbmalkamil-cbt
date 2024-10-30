<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAnswer extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id'
    ];

    /**
     * Get the user that owns the StudentAnswer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questions()
    {
        return $this->belongsTo(CourseAnswer::class, 'course_questions_id', 'id');
    }
}