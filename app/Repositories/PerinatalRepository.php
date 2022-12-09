<?php

namespace App\Repositories;

use App\Models\Perinatal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PerinatalRepository.
 *
 * @version April 9, 2019, 6:53 am -03
 *
 * @method Perinatal findWithoutFail($id, $columns = ['*'])
 * @method Perinatal find($id, $columns = ['*'])
 * @method Perinatal first($columns = ['*'])
 */
class PerinatalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'referencias_json',
        'cor_secao_1',
        'titulo_secao_1',
        'subtitulo_secao_1',
        'conteudo_secao_1',
        'cor_secao_2',
        'titulo_secao_2',
        'subtitulo_secao_2',
        'conteudo_secao_2',
        'cor_secao_3',
        'titulo_secao_3',
        'subtitulo_secao_3',
        'conteudo_secao_3',
    ];

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return Perinatal::class;
    }

    /**
     * Override no update para montar o array de referencias.
     *
     * @param  mixed  $input
     * @param  mixed  $id
     */
    public function update($input, $id)
    {
        if (! empty($input['referencias'])) {
            $refs = $input['referencias'];
            $arrFinal = [];
            foreach ($refs['texto'] as $idx => $texto) {
                $arrFinal[] = [
                    'texto' => $texto,
                    'link' => $refs['link'][$idx],
                ];
            }

            $input['referencias_json'] = json_encode($arrFinal);
        }

        return parent::update($input, $id);
    }
}
