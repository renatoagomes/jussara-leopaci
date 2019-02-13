<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Homepage.
 * @version January 3, 2019, 9:11 pm BRST
 *
 * @property json frases_slider
 * @property string titulo_apresentacao
 * @property string subtitulo_apresentacao
 * @property string texto_apresentacao
 * @property json curriculum_json
 * @property string link_curriculum
 * @property string titulo_atuacao
 * @property string titulo_aba_psic_atuacao
 * @property string intro_aba_psic_atuacao
 * @property string texto_aba_psic_atuacao
 * @property string titulo_aba_social_atuacao
 * @property string intro_aba_social_atuacao
 * @property string texto_aba_social_atuacao
 * @property string titulo_aba_perinatal_atuacao
 * @property string intro_aba_perinatal_atuacao
 * @property string texto_aba_perinatal_atuacao
 * @property string titulo_aba_eventos_atuacao
 * @property string intro_aba_eventos_atuacao
 * @property string texto_aba_eventos_atuacao
 */
class Homepage extends Model
{
    public $table = 'homepages';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'frases_slider',
        'titulo_apresentacao',
        'subtitulo_apresentacao',
        'texto_apresentacao',
        'curriculum_json',
        'link_curriculum',
        'titulo_atuacao',
        'titulo_aba_psic_atuacao',
        'intro_aba_psic_atuacao',
        'texto_aba_psic_atuacao',
        'titulo_aba_social_atuacao',
        'intro_aba_social_atuacao',
        'texto_aba_social_atuacao',
        'titulo_aba_perinatal_atuacao',
        'intro_aba_perinatal_atuacao',
        'texto_aba_perinatal_atuacao',
        'titulo_aba_eventos_atuacao',
        'intro_aba_eventos_atuacao',
        'texto_aba_eventos_atuacao',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo_apresentacao' => 'string',
        'subtitulo_apresentacao' => 'string',
        'texto_apresentacao' => 'string',
        'link_curriculum' => 'string',
        'titulo_atuacao' => 'string',
        'titulo_aba_psic_atuacao' => 'string',
        'intro_aba_psic_atuacao' => 'string',
        'texto_aba_psic_atuacao' => 'string',
        'titulo_aba_social_atuacao' => 'string',
        'intro_aba_social_atuacao' => 'string',
        'texto_aba_social_atuacao' => 'string',
        'titulo_aba_perinatal_atuacao' => 'string',
        'intro_aba_perinatal_atuacao' => 'string',
        'texto_aba_perinatal_atuacao' => 'string',
        'titulo_aba_eventos_atuacao' => 'string',
        'intro_aba_eventos_atuacao' => 'string',
        'texto_aba_eventos_atuacao' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [

    ];


    /**
     * Acessor para
     */
    public function getObjFrasesSliderAttribute()
    {
        return json_decode($this->frases_slider);
    }



    /**
     * Relação de polimorfica com fotos
     *
     * @return void
     */
    public function fotos()
    {
        return $this->morphMany(\App\Models\Foto::class, 'owner');
    }

    /**
     * Foto de Fundo da Home
     */
    public function fotoFundo()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_BG);
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho certo que irão aparecer ~1200max
     */
    public function getLinkFotoFundoAttribute()
    {
        if ($this->fotoFundo()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto/"
                . $this->fotoFundo()->first()->cloudinary_id
                . ".jpg";
        }

        return '//via.placeholder.com/1920x1080';
    }


}