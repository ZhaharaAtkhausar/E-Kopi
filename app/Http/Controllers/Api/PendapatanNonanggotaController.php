<?php

namespace App\Http\Controllers\API;

use App\Models\PendapatanNonanggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendapatanNonanggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendapatanNonanggota = PendapatanNonanggota::all();

        return response()->json($pendapatanNonanggota);
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
        $pendapatanNonanggota = PendapatanNonanggota::create( $request->all() );
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
        $pendapatanNonanggota = PendapatanNonanggota::find($id);
        return response()->json($pendapatanNonanggota);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(PendapatanNonanggota $pendapatanNonanggota)
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
        $pendapatanNonanggota = PendapatanNonanggota::find($id);
        $pendapatanNonanggota->update( $request->all() );
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
        $pendapatanNonanggota = PendapatanNonanggota::find($id);
        $pendapatanNonanggota->delete();

        return response()->json('data terhapus');
    }
}
