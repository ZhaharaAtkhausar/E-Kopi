<?php

namespace App\Http\Controllers\API;

use App\Models\Ekuitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EkuitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekuitas = Ekuitas::all();

        return response()->json($ekuitas);
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
        $ekuitas = Ekuitas::create( $request->all() );
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
        $ekuitas = Ekuitas::find($id);
        return response()->json($ekuitas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekuitas $ekuitas)
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
        $ekuitas = Ekuitas::find($id);
        $ekuitas->update( $request->all() );
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
        $ekuitas = Ekuitas::find($id);
        $ekuitas->delete();

        return response()->json('data terhapus');
    }
}
