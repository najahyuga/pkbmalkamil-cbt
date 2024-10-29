<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id'
    ];
    
    /**
     * Get the user that owns the CourseQuestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    /**
     * Get all of the comments for the CourseQuestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(CourseAnswer::class, 'question_id', 'id');
    }
}
