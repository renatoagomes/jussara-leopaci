<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Homepage
 * @package App\Models
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
        'texto_aba_eventos_atuacao'
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
        'texto_aba_eventos_atuacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];




    
}
