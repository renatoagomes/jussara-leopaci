<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ReferenciaPost.
 * @version February 8, 2019, 11:12 pm -02
 *
 * @property string texto
 * @property string link
 */
class ReferenciaPost extends Model
{
    public $table = 'referencia_posts';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'texto',
        'link',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'texto' => 'string',
        'link' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Relação entre a referencia e o post.
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
