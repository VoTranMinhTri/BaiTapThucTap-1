<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use App\Http\Requests\StoreVeRequest;
use App\Http\Requests\UpdateVeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dsve = Session::get('dsve');
        if(empty($dsve)){
            return redirect('/');
        }
        return view('pay-success', ['dsve' => $dsve]);
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
     * @param  \App\Http\Requests\StoreVeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ve  $ve
     * @return \Illuminate\Http\Response
     */
    public function show(Ve $ve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ve  $ve
     * @return \Illuminate\Http\Response
     */
    public function edit(Ve $ve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVeRequest  $request
     * @param  \App\Models\Ve  $ve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVeRequest $request, Ve $ve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ve  $ve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ve $ve)
    {
        //
    }
}
