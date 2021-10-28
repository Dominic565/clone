<?php

namespace App\Repositories;

use App\Models\Places;
use App\Repositories\BaseRepository;

/**
 * Class PlacesRepository
 * @package App\Repositories
 * @version October 27, 2021, 3:37 pm UTC
*/

class PlacesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Region',
        'Country',
        'Zipcode',
        'Description'
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
        return Places::class;
    }
}
