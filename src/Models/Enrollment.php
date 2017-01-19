<?php

namespace Scool\Enrollment\Models\Enrollment;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Scool\Enrollment\Models\EnrollmentStudySubmodules\EnrollmentStudySubmodules;


class Enrollment extends Model implements Transformable
{
	use TransformableTrait, nameable;
//    protected $table = 'enrollments';
    protected $fillable = ['user_id', 'study_id', 'course_id', 'classroom_id'];
//    protected $guarded = ['id'];

    public function details()
    {
        return $this->hasMany(EnrollmentStudySubmodules::class);
    }
}
