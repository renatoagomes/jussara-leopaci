<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class: Foto.
 *
 * @see Model
 */
class Foto extends Model
{
    const TIPO_HOME_BG = 1;
    const TIPO_HOME_APRES = 2;

    const TIPO_HOME_ATUACAO_PSI_1 = 3;
    const TIPO_HOME_ATUACAO_PSI_2 = 4;
    const TIPO_HOME_ATUACAO_PSI_3 = 5;

    const TIPO_HOME_ATUACAO_SOC_1 = 6;
    const TIPO_HOME_ATUACAO_SOC_2 = 7;
    const TIPO_HOME_ATUACAO_SOC_3 = 8;

    const TIPO_HOME_ATUACAO_PER_1 = 9;
    const TIPO_HOME_ATUACAO_PER_2 = 10;
    const TIPO_HOME_ATUACAO_PER_3 = 11;

    const TIPO_HOME_ATUACAO_EVE_1 = 12;
    const TIPO_HOME_ATUACAO_EVE_2 = 13;
    const TIPO_HOME_ATUACAO_EVE_3 = 14;

    public $table = 'fotos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'image_name',
        'image_path',
        'image_extension',
        'cloudinary_id',
        'tipo',
        'owner_id',
        'owner_type',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image_name' => 'string',
        'image_path' => 'string',
        'image_extension' => 'string',
        'owner_id' => 'integer',
        'owner_type' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Binding Model Events.
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($photo) {
            return $photo->cloudinary_id
                ? \Cloudder::destroyImage($photo->cloudinary_id)
                : true;
        });

        /** Deletando o arquivo do cloudinary e do filesystem se existir **/
        static::deleted(function ($photo) {
            if (\File::exists($photo->fullPath)) {
                \File::delete($photo->fullPath);
            }
        });
    }

    /**
     * Relação polimorfica para que uma foto
     * possa pertencer a um mais de 1 tipo de entidade.
     */
    public function owner()
    {
        return $this->morphTo();
    }

    /**********************
     * Acessors / Mutators
     ************************/

    /**
     * Definindo um acessor para a URL da foto.
     */
    public function getURLAttribute()
    {
        return url('/uploads/'.$this->image_name.'.'.$this->image_extension);
    }

    /**
     * Definindo um acessor para o fullpath da foto.
     */
    public function getFullPathAttribute()
    {
        return $this->image_path.$this->image_name.'.'.$this->image_extension;
    }

    /**
     * Definindo um acessor para a URL da foto no cloudinary no tamanho maximo que irão aparecer 800 x 450.
     */
    public function getURLCloudinaryAttribute()
    {
        return '//res.cloudinary.com/'
            .env('CLOUDINARY_CLOUD_NAME')
            .'/image/upload/f_auto/'
            .env('CLOUDINARY_CLOUD_FOLDER', '')
            ."/$this->cloudinary_id";
    }
}
