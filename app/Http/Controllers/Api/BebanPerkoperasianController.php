<?php

namespace App\Http\Controllers\API;

use App\Models\BebanPerkoperasian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BebanPerkoperasianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebanPerkoperasian = BebanPerkoperasian::all();

        return response()->json($bebanPerkoperasian);
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
        $bebanPerkoperasian = BebanPerkoperasian::create( $request->all() );
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
        $bebanPerkoperasian = BebanPerkoperasian::find($id);
        return response()->json($bebanPerkoperasian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(BebanPerkoperasian $bebanPerkoperasian)
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
        $bebanPerkoperasian = BebanPerkoperasian::find($id);
        $bebanPerkoperasian->update( $request->all() );
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
        $bebanPerkoperasian = BebanPerkoperasian::find($id);
        $bebanPerkoperasian->delete();

        return response()->json('data terhapus');
    }
}
