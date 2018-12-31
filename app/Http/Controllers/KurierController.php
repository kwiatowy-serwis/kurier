<?php

namespace App\Http\Controllers;

use App\Kurier;
use App\OrderPlace;
use Illuminate\Http\Request;

class KurierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  \App\Http\Resources\Kurier::collection(\App\Kurier::where('free', 1)->get());
    }

    public function order(Request $request)
    {
        $id = $_POST['id'];



        $packTakePlace = $_POST['receptionPlace'];



        $packTakePlaceCity = $packTakePlace['city'];
        $packTakePlaceStreet = $packTakePlace['street'];
        $packTakePlaceZipCode = $packTakePlace['zip_code'];
        $packTakePlacePhone = $packTakePlace['phone'];

        if(empty($packTakePlace) || !$packTakePlaceCity || !$packTakePlaceStreet || !$packTakePlaceZipCode || !$packTakePlacePhone)
        {
            return ['data' => 'Error: receptionPlace are required: city, street, zip_code, phone'];
        }

        $deliverPlace = $_POST['deliverPlace'];
        $deliverPlaceFirstName = $deliverPlace['firstname'];
        $deliverPlaceLastName = $deliverPlace['lastname'];
        $deliverPlaceCity = $deliverPlace['city'];
        $deliverPlaceStreet = $deliverPlace['street'];
        $deliverPlaceZipCode = $deliverPlace['zip_code'];
        $deliverPlacePhone = $deliverPlace['phone'];

        if(empty($deliverPlace) || !$deliverPlaceFirstName || !$deliverPlaceLastName || !$deliverPlaceCity || !$deliverPlaceStreet || !$deliverPlaceZipCode || !$deliverPlacePhone)
        {
            return ['data' => 'Error: deliverPlace are required: firstname, lastname, city, street, zip_code, phone'];
        }

        $kurier = \App\Kurier::find($id);

        if(!$kurier || empty($kurier))
        {
            return ['data' => 'There is no courier with id: ' . $id];
        }

        $kurier->free = 0;
        $kurier->save();

        $orderPlace = new OrderPlace();
        $orderPlace->receptionPlaceCity = $packTakePlace;
        $orderPlace->receptionPlaceStreet = $packTakePlaceStreet;
        $orderPlace->receptionPlaceZipCode = $packTakePlaceZipCode;
        $orderPlace->receptionPlacePhone = $packTakePlacePhone;

        $orderPlace->deliverPlaceFirstname = $deliverPlaceFirstName;
        $orderPlace->deliverPlaceLastname = $deliverPlaceLastName;
        $orderPlace->deliverPlaceCity = $deliverPlaceCity;
        $orderPlace->deliverPlaceStreet = $deliverPlaceStreet;
        $orderPlace->deliverPlaceZipCode = $deliverPlaceZipCode;
        $orderPlace->deliverPlacePhone = $deliverPlacePhone;

        $orderPlace->kurier_id = $kurier->id;

        return ['data' => 'Your courier order will be processed'];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kurier  $flower
     * @return \Illuminate\Http\Response
     */
    public function show(Kurier $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kurier  $flower
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurier $flower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kurier  $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurier $flower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kurier  $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurier $flower)
    {
        //
    }
}
