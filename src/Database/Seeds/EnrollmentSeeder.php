<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedEnrollment();
    }
    private function seedEnrollment()
    {
        factory();
    }
}