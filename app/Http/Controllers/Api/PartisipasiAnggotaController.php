<?php

namespace App\Http\Controllers\API;

use App\Models\PartisipasiAnggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartisipasiAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partisipasiAnggota = PartisipasiAnggota::all();

        return response()->json($partisipasiAnggota);
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
        $partisipasiAnggota = PartisipasiAnggota::create( $request->all() );
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
        $partisipasiAnggota = PartisipasiAnggota::find($id);
        return response()->json($partisipasiAnggota);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(PartisipasiAnggota $partisipasiAnggota)
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
        $partisipasiAnggota = PartisipasiAnggota::find($id);
        $partisipasiAnggota->update( $request->all() );
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
        $partisipasiAnggota = PartisipasiAnggota::find($id);
        $partisipasiAnggota->delete();

        return response()->json('data terhapus');
    }
}
