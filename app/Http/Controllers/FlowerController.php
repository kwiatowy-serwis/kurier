<?php

namespace App\Http\Controllers;

use App\Kurier;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  \App\Http\Resources\Flower::collection(\App\Kurier::all());
    }

    public function order(Request $request)
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        $flower = \App\Kurier::find($id);

        if(!$flower || empty($flower))
        {
            return ['data' => 'There is no flower with id: ' . $id];
        }

        if($flower->quantity < $quantity)
        {
            return ['data' => 'You want to order more flower than we have. You want '. $quantity . ' but we have ' . $flower->quantity];
        }

        $flower->quantity -= $quantity;
        $flower->save();

        return ['data' => 'Your order will be processed'];
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
