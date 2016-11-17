<?php

namespace Scool\Enrollment\Models\EnrollmentStudySubmodules;

use Illuminate\Database\Eloquent\Model;

class EnrollmentStudySubmodules extends Model
{
    protected $table = 'enrollment_study_submodules';
    protected $fillable = ['enrollment_id', 'study_submodule_id',];
    protected $guarded = ['id'];

}
