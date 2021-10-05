<?php

namespace App\Repositories;

use App\Models\OtherOption;
use App\Repositories\BaseRepository;

/**
 * Class OtherOptionRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:16 am UTC
*/

class OtherOptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Spot_name',
        'Address',
        'Payment'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OtherOption::class;
    }
}
