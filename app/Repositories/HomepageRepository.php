<?php

namespace App\Repositories;

use App\Models\Homepage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HomepageRepository
 * @package App\Repositories
 * @version January 3, 2019, 9:11 pm BRST
 *
 * @method Homepage findWithoutFail($id, $columns = ['*'])
 * @method Homepage find($id, $columns = ['*'])
 * @method Homepage first($columns = ['*'])
*/
class HomepageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Homepage::class;
    }
}
