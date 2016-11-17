<?php

namespace Scool\Enrollment;

class ScoolEnrollment
{
    public static function factories()
    {
        return [
            SCOOL_ENROLLMENT_PATH . '/database/factories/EnrollmentFactory.php' =>
                database_path('/factories/EnrollmentFactory.php'),
        ];
    }
    // public static function configs()
    // {
    //     return [
    //         SCOOL_ENROLLMENT_PATH . '/config/enrollment.php' =>
    //             config_path('enrollment.php'),
    //     ];
    // }
}
