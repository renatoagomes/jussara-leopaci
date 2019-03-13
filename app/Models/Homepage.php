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
     * Foto da secao Apresentacao da Home
     */
    public function fotoApresentacao()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_APRES);
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoFundoAttribute()
    {
        if ($this->fotoFundo()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoFundo()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/1900x800';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoApresentacaoAttribute()
    {
        if ($this->fotoApresentacao()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoApresentacao()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x750';
    }

    /**
     * Acessor para o obj contendo cada uma das citacoes da homepage
     */
    public function getObjCitacoesAttribute()
    {
        return json_decode($this->frases_slider);
    }

    /**
     * Acessor para o obj contendo cada um dos itens do curriculum
     */
    public function getObjListaCurriculumAttribute()
    {
        return json_decode($this->curriculum_json);
    }

}
