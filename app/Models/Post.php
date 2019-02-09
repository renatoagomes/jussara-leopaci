<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
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
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'capa_url',
        'slug',
        'titulo',
        'autor',
        'conteudo'
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
        'autor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
