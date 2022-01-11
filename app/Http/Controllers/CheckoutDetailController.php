<?php

namespace App\Http\Controllers;

use App\Models\Checkout_detail;
use App\Http\Requests\StoreCheckout_detailRequest;
use App\Http\Requests\UpdateCheckout_detailRequest;

class CheckoutDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCheckout_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckout_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout_detail  $checkout_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout_detail $checkout_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout_detail  $checkout_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout_detail $checkout_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckout_detailRequest  $request
     * @param  \App\Models\Checkout_detail  $checkout_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckout_detailRequest $request, Checkout_detail $checkout_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout_detail  $checkout_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout_detail $checkout_detail)
    {
        //
    }
}
