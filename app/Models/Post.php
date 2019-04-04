<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Post.
 * @version February 8, 2019, 10:23 pm -02
 *
 * @property string capa_url
 * @property string slug
 * @property string titulo
 * @property string autor
 * @property longtext conteudo
 */
class Post extends Model
{
    public $table = 'posts';

    protected $dates = ['deleted_at', 'data_publicacao'];

    public $fillable = [
        'capa_url',
        'slug',
        'titulo',
        'autor',
        'conteudo',
        'referencias_json',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'capa_url' => 'string',
        'slug' => 'string',
        'titulo' => 'string',
        'autor' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [

    ];

    public function getReferenciasAttribute()
    {
        return $this->attributes['referencias_json']
            ? json_decode($this->attributes['referencias_json'])
            : [];
    }

    /**
     * Acessor para a data de publicacao ptbr.
     */
    public function getDataPublicacaoFormatadaAttribute()
    {
        setlocale(LC_TIME, 'pt_BR.UTF8');
        $data = new \Carbon\Carbon($this->data_publicacao);

        return $data->formatLocalized('%d de %B de %Y');
    }

    /**
     * Acessor para o prview do post.
     */
    public function getPreviewAttribute()
    {
        $preview = substr($this->conteudo, 3, 100);

        return $preview;
    }

    /**
     * Metodo para o preview do post.
     */
    public function preview($limit)
    {
        $preview = substr($this->conteudo, 3, $limit);

        return $preview;
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
