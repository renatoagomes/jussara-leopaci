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
    const TIPO_CAPA = 1;
    const TIPO_HOME_BG = 2;

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
            .'/image/upload/'
            .env('CLOUDINARY_CLOUD_FOLDER', '')
            ."/$this->cloudinary_id";
    }
}
