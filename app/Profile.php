<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class Profile
 * @package App
 */
class Profile extends Model
{
    /**
     * @var string
     */
    protected $table = 'profile';

    /**
     * Fillable fields for a Profile
     *
     * @var array
     */
    protected $fillable = [
        'id','last_name','age',
        'phone', 'address'
    ];

}