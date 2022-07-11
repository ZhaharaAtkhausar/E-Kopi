<?php

namespace App\Http\Controllers\API;

use App\Models\PembiayaanBermasalah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembiayaanBermasalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembiayaanBermasalah = PembiayaanBermasalah::all();

        return response()->json($pembiayaanBermasalah);
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
        $pembiayaanBermasalah = PembiayaanBermasalah::create( $request->all() );
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
        $pembiayaanBermasalah = PembiayaanBermasalah::find($id);
        return response()->json($pembiayaanBermasalah);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(PembiayaanBermasalah $pembiayaanBermasalah)
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
        $pembiayaanBermasalah = PembiayaanBermasalah::find($id);
        $pembiayaanBermasalah->update( $request->all() );
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
        $pembiayaanBermasalah = PembiayaanBermasalah::find($id);
        $pembiayaanBermasalah->delete();

        return response()->json('data terhapus');
    }
}
