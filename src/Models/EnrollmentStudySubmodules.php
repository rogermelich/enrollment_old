<?php

namespace Scool\Enrollment\Models\EnrollmentStudySubmodules;

use Illuminate\Database\Eloquent\Model;
use Scool\Enrollment\Models\Enrollment\Enrollment;

class EnrollmentStudySubmodules extends Model
{
//    protected $table = 'enrollment_study_submodules';
    protected $fillable = ['enrollment_id', 'module_id', 'study_submodule_id',];
//    protected $guarded = ['id'];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}

