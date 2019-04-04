<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostRepository.
 * @version February 8, 2019, 10:23 pm -02
 *
 * @method Post findWithoutFail($id, $columns = ['*'])
 * @method Post find($id, $columns = ['*'])
 * @method Post first($columns = ['*'])
 */
class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'capa_url',
        'slug',
        'titulo',
        'autor',
        'conteudo',
    ];

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return Post::class;
    }

    /**
     * Override no create para ja criar um slug de exemplo
     *
     * @return void
     */
    public function create($input)
    {
        $input['slug'] = $this->transformaSlug($input['titulo']);
        return parent::create($input);
    }

    /**
     * Override no update para montar o array de referencias
     *
     * @param mixed $input
     * @param mixed $id
     */
    public function update($input, $id)
    {
        if (!empty($input['referencias'])) {

            $refs = $input['referencias'];
            $arrFinal = [];
            foreach ($refs['texto'] as $idx => $texto ) {
                $arrFinal[] = [
                    'texto' => $texto,
                    'link' => $refs['link'][$idx]
                ];
            }

            $input['referencias_json'] = json_encode($arrFinal);

        }
        return parent::update($input, $id);
    }


    /**
     * Metodo para transformar em slug uma string
     *
     * @return string sem acentos, sem espacos e sem alguns caracteres especiais
     */
    public function transformaSlug($string)
    {
        $string = str_replace(['!', '@', '#', '$', '%', '&'], ['', '', '', '', '', ''], $string);
        $string = str_replace(' ', '-', $string);
        $string = $this->tirarAcentos($string);
        return strtolower($string);
    }

    public function tirarAcentos($string)
    {
        return preg_replace(array(
            "/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/",
            "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/",
            "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"),
        explode(" ", "a A e E i I o O u U n N"), $string);
}



}
