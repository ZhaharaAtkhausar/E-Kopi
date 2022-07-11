<?php

namespace App\Http\Controllers\API;

use App\Models\AktivaTidakBerwujud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AktivaTidakBerwujudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktivaTidakBerwujud = AktivaTidakBerwujud::all();

        return response()->json($aktivaTidakBerwujud);
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
        $aktivaTidakBerwujud = AktivaTidakBerwujud::create( $request->all() );
        return response()->json('data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aktivaTidakBerwujud = AktivaTidakBerwujud::find($id);
        return response()->json($aktivaTidakBerwujud);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(AktivaTidakBerwujud $aktivaTidakBerwujud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aktivaTidakBerwujud = AktivaTidakBerwujud::find($id);
        $aktivaTidakBerwujud->update( $request->all() );
        return response()->json('Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aktivaTidakBerwujud = AktivaTidakBerwujud::find($id);
        $aktivaTidakBerwujud->delete();

        return response()->json('data terhapus');
    }
}
