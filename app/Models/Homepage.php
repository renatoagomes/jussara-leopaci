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
        'link_aba_psic_atuacao',
        'titulo_aba_social_atuacao',
        'intro_aba_social_atuacao',
        'texto_aba_social_atuacao',
        'link_aba_social_atuacao',
        'titulo_aba_perinatal_atuacao',
        'intro_aba_perinatal_atuacao',
        'texto_aba_perinatal_atuacao',
        'link_aba_perinatal_atuacao',
        'titulo_aba_eventos_atuacao',
        'intro_aba_eventos_atuacao',
        'texto_aba_eventos_atuacao',
        'link_aba_eventos_atuacao',
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
     * Foto da secao Atuacao na aba Psicanalitica
     */
    public function fotoAtuacaoPsicanalitica1()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_1);
    }

    /**
     * Foto da secao Atuacao na aba Psicanalitica
     */
    public function fotoAtuacaoPsicanalitica2()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_2);
    }

    /**
     * Foto da secao Atuacao na aba Psicanalitica
     */
    public function fotoAtuacaoPsicanalitica3()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_3);
    }

    /**
     * Foto da secao Atuacao na aba Social
     */
    public function fotoAtuacaoSocial1()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_1);
    }

    /**
     * Foto da secao Atuacao na aba Social
     */
    public function fotoAtuacaoSocial2()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_2);
    }

    /**
     * Foto da secao Atuacao na aba Social
     */
    public function fotoAtuacaoSocial3()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_3);
    }

    /**
     * Foto da secao Atuacao na aba Perinatal
     */
    public function fotoAtuacaoPerinatal1()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PER_1);
    }

    /**
     * Foto da secao Atuacao na aba Perinatal
     */
    public function fotoAtuacaoPerinatal2()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PER_2);
    }

    /**
     * Foto da secao Atuacao na aba Perinatal
     */
    public function fotoAtuacaoPerinatal3()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_PER_3);
    }

    /**
     * Foto da secao Atuacao na aba Eventos
     */
    public function fotoAtuacaoEventos1()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_1);
    }

    /**
     * Foto da secao Atuacao na aba Eventos
     */
    public function fotoAtuacaoEventos2()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_2);
    }

    /**
     * Foto da secao Atuacao na aba Eventos
     */
    public function fotoAtuacaoEventos3()
    {
        return $this->fotos()->where('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_3);
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
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPsi1Attribute()
    {
        if ($this->fotoAtuacaoPsicanalitica1()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPsicanalitica1()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPsi2Attribute()
    {
        if ($this->fotoAtuacaoPsicanalitica2()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPsicanalitica2()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPsi3Attribute()
    {
        if ($this->fotoAtuacaoPsicanalitica3()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPsicanalitica3()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/600x450';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoSoc1Attribute()
    {
        if ($this->fotoAtuacaoSocial1()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoSocial1()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoSoc2Attribute()
    {
        if ($this->fotoAtuacaoSocial2()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoSocial2()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoSoc3Attribute()
    {
        if ($this->fotoAtuacaoSocial3()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoSocial3()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/600x450';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPer1Attribute()
    {
        if ($this->fotoAtuacaoPerinatal1()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPerinatal1()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPer2Attribute()
    {
        if ($this->fotoAtuacaoPerinatal2()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPerinatal2()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoPer3Attribute()
    {
        if ($this->fotoAtuacaoPerinatal3()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoPerinatal3()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/600x450';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoEve1Attribute()
    {
        if ($this->fotoAtuacaoEventos1()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoEventos1()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoEve2Attribute()
    {
        if ($this->fotoAtuacaoEventos2()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoEventos2()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/500x600';
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoAtuacaoEve3Attribute()
    {
        if ($this->fotoAtuacaoEventos3()->first()) {

            return "//res.cloudinary.com/"
                . env('CLOUDINARY_CLOUD_NAME')
                . "/image/upload/q_auto,f_auto/"
                . env('CLOUDINARY_CLOUD_FOLDER') . "/"
                . $this->fotoAtuacaoEventos3()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/600x450';
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


    /**
     * Metodo para obter o nome do metodo que guarda a relacao de determinado tipo
     *
     * @PS WTF foi essa brisa? fotos()->where('tipo', $tipo) faz a mesma coisa ¬¬
     * @return string com o nome da relacao || false (se o indice nao existir)
     */
    public function getRelacaoParaFotoPorTipo($tipo)
    {
        $arrTipoRelacao = [
            \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_1 => 'fotoAtuacaoPsicanalitica1',
            \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_2 => 'fotoAtuacaoPsicanalitica2',
            \App\Models\Foto::TIPO_HOME_ATUACAO_PSI_3 => 'fotoAtuacaoPsicanalitica3',

            \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_1 => 'fotoAtuacaoSocial1',
            \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_2 => 'fotoAtuacaoSocial2',
            \App\Models\Foto::TIPO_HOME_ATUACAO_SOC_3 => 'fotoAtuacaoSocial3',

            \App\Models\Foto::TIPO_HOME_ATUACAO_PER_1 => 'fotoAtuacaoPerinatal1',
            \App\Models\Foto::TIPO_HOME_ATUACAO_PER_2 => 'fotoAtuacaoPerinatal2',
            \App\Models\Foto::TIPO_HOME_ATUACAO_PER_3 => 'fotoAtuacaoPerinatal3',

            \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_1 => 'fotoAtuacaoEventos1',
            \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_2 => 'fotoAtuacaoEventos2',
            \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_3 => 'fotoAtuacaoEventos3'
        ];

        return array_key_exists($tipo, $arrTipoRelacao) ? $arrTipoRelacao[$tipo] : false;
    }


}
