<?php

namespace App\Repositories;

use App\Models\ReferenciaPost;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReferenciaPostRepository.
 * @version February 8, 2019, 11:12 pm -02
 *
 * @method ReferenciaPost findWithoutFail($id, $columns = ['*'])
 * @method ReferenciaPost find($id, $columns = ['*'])
 * @method ReferenciaPost first($columns = ['*'])
 */
class ReferenciaPostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'texto',
        'link',
    ];

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return ReferenciaPost::class;
    }
}
