<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\SalesBox;
use Illuminate\Http\Request;

class SalesBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('salesbox.index');
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
     * @param  \App\SalesBox  $salesBox
     * @return \Illuminate\Http\Response
     */
    public function show(SalesBox $salesBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SalesBox  $salesBox
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesBox $salesBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SalesBox  $salesBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesBox $salesBox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SalesBox  $salesBox
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesBox $salesBox)
    {
        //
    }
}
