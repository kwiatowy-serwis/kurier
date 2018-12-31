<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class OrderPlace
 * @property $receptionPlaceCity
 * @property $receptionPlaceStreet
 * @property $receptionPlaceZipCode
 * @property $receptionPlacePhone
 *
 * @property $deliverPlaceFirstname
 * @property $deliverPlaceLastname
 * @property $deliverPlaceCity
 * @property $deliverPlaceStreet
 * @property $deliverPlaceZipCode
 * @property $deliverPlacePhone
 *
 * @property $kurier_id
 */

class OrderPlace extends Model
{
    public function kurier()
    {
        $this->belongsTo('App/Kurier');
    }
}
