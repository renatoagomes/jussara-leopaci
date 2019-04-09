<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Perinatal
 * @package App\Models
 * @version April 9, 2019, 6:53 am -03
 *
 * @property string titulo
 * @property longtext referencias_json
 * @property string cor_secao_1
 * @property string titulo_secao_1
 * @property string subtitulo_secao_1
 * @property longtext conteudo_secao_1
 * @property string cor_secao_2
 * @property string titulo_secao_2
 * @property string subtitulo_secao_2
 * @property longtext conteudo_secao_2
 * @property string cor_secao_3
 * @property string titulo_secao_3
 * @property string subtitulo_secao_3
 * @property longtext conteudo_secao_3
 */
class Perinatal extends Model
{
    public $table = 'perinatals';

    protected $dates = ['deleted_at'];

    public $fillable = [
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
        'conteudo_secao_3'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'cor_secao_1' => 'string',
        'titulo_secao_1' => 'string',
        'subtitulo_secao_1' => 'string',
        'cor_secao_2' => 'string',
        'titulo_secao_2' => 'string',
        'subtitulo_secao_2' => 'string',
        'cor_secao_3' => 'string',
        'titulo_secao_3' => 'string',
        'subtitulo_secao_3' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Acessor para decodar o array de referencias
     */
    public function getReferenciasAttribute()
    {
        return $this->attributes['referencias_json']
            ? json_decode($this->attributes['referencias_json'])
            : [];
    }


    /**
     * Relacao com fotoCapa
     */
    public function fotoCapa()
    {
        return $this->morphOne(\App\Models\Foto::class, 'owner');
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoCapaAttribute()
    {
        if ($this->fotoCapa()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoCapa()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/900x400';
    }


}
