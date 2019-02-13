<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;

    public $table = 'posts';

    protected $dates = ['deleted_at', 'data_publicacao'];

    public $fillable = [
        'capa_url',
        'slug',
        'titulo',
        'autor',
        'conteudo',
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

    /**
     * Relacao entre um post e suas referencias.
     *
     * @return void
     */
    public function referencias()
    {
        return $this->hasMany('App\Models\ReferenciaPost');
    }

    /**
     * Acessor para a data de publicacao ptbr.
     */
    public function getDataPublicacaoFormatadaAttribute()
    {
        \Carbon\Carbon::setLocale('pt_BR');
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
}
