<?php

namespace App\Repositories;

use App\Models\TouristSpot;
use App\Repositories\BaseRepository;

/**
 * Class TouristSpotRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:19 am UTC
*/

class TouristSpotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tourist_spot',
        'description',
        'Expenses'
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
        return TouristSpot::class;
    }
}
