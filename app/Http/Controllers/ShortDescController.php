<?php

namespace App\Http\Controllers;

use App\Models\Short_desc;
use App\Http\Requests\StoreShort_descRequest;
use App\Http\Requests\UpdateShort_descRequest;

class ShortDescController extends Controller
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
     * @param  \App\Http\Requests\StoreShort_descRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShort_descRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Short_desc  $short_desc
     * @return \Illuminate\Http\Response
     */
    public function show(Short_desc $short_desc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Short_desc  $short_desc
     * @return \Illuminate\Http\Response
     */
    public function edit(Short_desc $short_desc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShort_descRequest  $request
     * @param  \App\Models\Short_desc  $short_desc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShort_descRequest $request, Short_desc $short_desc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Short_desc  $short_desc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Short_desc $short_desc)
    {
        //
    }
}
