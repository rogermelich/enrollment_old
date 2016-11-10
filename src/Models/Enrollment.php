<?php

namespace Scool\Enrollment\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $fillable = ['validated', 'finished', 'period_id', 'study_id', 'course_id', 'classroom_id'];
    protected $guarded = ['id'];
}
