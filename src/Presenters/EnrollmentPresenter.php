<?php

namespace Scool\Enrollment\Presenters;

use Scool\Enrollment\Transformers\EnrollmentTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EnrollmentPresenter
 *
 * @package namespace App\Presenters;
 */
class EnrollmentPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EnrollmentTransformer();
    }
}
