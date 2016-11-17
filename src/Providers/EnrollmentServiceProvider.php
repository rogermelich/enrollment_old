<?php

namespace Scool\Enrollment\Providers;

use Illuminate\Support\ServiceProvider;
// use Scool\Enrollment\ScoolEnrollment;

/**
 * Class EnrollmentServiceProvider
 * @package Scool\Enrollment\Providers
 */
class EnrollmentServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        // if (!defined('SCOOL_ENROLLMENT_PATH')) {
        //     define('SCOOL_ENROLLMENT_PATH', realpath(__DIR__.'/../../'));
        // }
    }

    /**
     *
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        // $this->publishConfig();
    }

    /**
     *
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     *
     */
    private function publishFactories()
    {
        $this->publishes(
            ScoolEnrollment::factories(),"scool_enrollment"
        );
    }

    // /**
    //  *
    //  */
    // private function publishConfig() {
    //     $this->publishes(
    //         ScoolEnrollment::configs(),"scool_enrollment"
    //     );
    //     $this->mergeConfigFrom(
    //         SCOOL_ENROLLMENT_PATH . '/config/enrollment.php', 'scool_enrollment'
    //     );
    }
}
