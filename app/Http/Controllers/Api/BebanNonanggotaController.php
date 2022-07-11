<?php

namespace App\Http\Controllers\API;

use App\Models\BebanNonanggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BebanNonanggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebanNonanggota = BebanNonanggota::all();

        return response()->json($bebanNonanggota);
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
        $bebanNonanggota = BebanNonanggota::create( $request->all() );
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
        $bebanNonanggota = BebanNonanggota::find($id);
        return response()->json($bebanNonanggota);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(BebanNonanggota $bebanNonanggota)
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
        $bebanNonanggota = BebanNonanggota::find($id);
        $bebanNonanggota->update( $request->all() );
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
        $bebanNonanggota = BebanNonanggota::find($id);
        $bebanNonanggota->delete();

        return response()->json('data terhapus');
    }
}
