<?php

namespace App\Repositories;

use App\Models\studentinformations;
use App\Repositories\BaseRepository;

/**
 * Class studentinformationsRepository
 * @package App\Repositories
 * @version October 28, 2021, 3:21 am UTC
*/

class studentinformationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Age',
        'ContactNO',
        'Address',
        'Gender',
        'Citizenship'
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
        return studentinformations::class;
    }
}
