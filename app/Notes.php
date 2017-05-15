<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * @package App
 */
class Notes extends Model
{

    /**
     * @var string
     */
    protected $table = 'notes';

    /**
     * Fillable fields for a Notes
     *
     * @var array
     */
    protected $fillable = [
        'title' ,
        'description',
        'tags'
    ];

}