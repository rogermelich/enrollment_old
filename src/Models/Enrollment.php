<?php

namespace Scool\Enrollment\Models\Enrollment;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $fillable = ['validated', 'finished', 'study_id', 'course_id', 'classroom_id'];
    protected $guarded = ['id'];
}
