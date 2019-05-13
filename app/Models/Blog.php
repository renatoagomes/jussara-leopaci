<?php

namespace App\Models;

use Eloquent as Model;

class Blog extends Model
{
    public $table = 'blogs';

    public $fillable = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Relacao com fotoCapa.
     */
    public function fotoCapa()
    {
        return $this->morphOne(\App\Models\Foto::class, 'owner');
    }

    /**
     * Acessor para a URL da foto no cloudinary com qualidade e formato automaticos || placeholder.
     *
     * @return string - URL do cloudinary ou via.placeholder.com
     */
    public function getLinkFotoCapaAttribute()
    {
        if ($this->fotoCapa()->first()) {
            return '//res.cloudinary.com/'
                .env('CLOUDINARY_CLOUD_NAME')
                .'/image/upload/q_auto,f_auto/'
                .env('CLOUDINARY_CLOUD_FOLDER').'/'
                .$this->fotoCapa()->first()->cloudinary_id;
        }

        return '//via.placeholder.com/1900x600';
    }
}
