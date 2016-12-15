<?php

namespace Scool\Enrollment\Models\Enrollment;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


class Enrollment extends Model implements Transformable
{
	use TransformableTrait, nameable;
    protected $table = 'enrollments';
    protected $fillable = ['validated', 'finished', 'study_id', 'course_id', 'classroom_id'];
    protected $guarded = ['id'];
}
