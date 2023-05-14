<?php

namespace App\Http\Controllers;

use App\Models\UserVerify;
use App\Http\Requests\StoreUserVerifyRequest;
use App\Http\Requests\UpdateUserVerifyRequest;

class UserVerifyController extends Controller
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
     * @param  \App\Http\Requests\StoreUserVerifyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserVerifyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserVerify  $userVerify
     * @return \Illuminate\Http\Response
     */
    public function show(UserVerify $userVerify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserVerify  $userVerify
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVerify $userVerify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserVerifyRequest  $request
     * @param  \App\Models\UserVerify  $userVerify
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserVerifyRequest $request, UserVerify $userVerify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserVerify  $userVerify
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVerify $userVerify)
    {
        //
    }
}
