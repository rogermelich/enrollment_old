<?php

namespace Scool\Enrollment\Transformers;

use League\Fractal\TransformerAbstract;
use Scool\Enrollment\Models\Enrollment\Enrollment;

/**
 * Class EnrollmentTransformer
 * @package namespace App\Transformers;
 */
class EnrollmentTransformer extends TransformerAbstract
{

    /**
     * Transform the \Enrollment entity
     * @param \Enrollment $model
     *
     * @return array
     */
    public function transform(Enrollment $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
