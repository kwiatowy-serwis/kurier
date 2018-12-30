<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Kurier
 *
 * @property $firstname
 * @property $lastname
 * @property $free
 *
 * @package App
 */
class Kurier extends Model
{
    protected $table = 'kuriers';

    protected $attributes = [

    ];

    protected $fillable = ['firstname', 'lastname', 'free'];
}
