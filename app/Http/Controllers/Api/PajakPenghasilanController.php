<?php

namespace App\Http\Controllers\API;

use App\Models\PajakPenghasilan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PajakPenghasilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pajakPenghasilan = PajakPenghasilan::all();

        return response()->json($pajakPenghasilan);
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
        $pajakPenghasilan = PajakPenghasilan::create( $request->all() );
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
        $pajakPenghasilan = PajakPenghasilan::find($id);
        return response()->json($pajakPenghasilan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(PajakPenghasilan $pajakPenghasilan)
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
        $pajakPenghasilan = PajakPenghasilan::find($id);
        $pajakPenghasilan->update( $request->all() );
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
        $pajakPenghasilan = PajakPenghasilan::find($id);
        $pajakPenghasilan->delete();

        return response()->json('data terhapus');
    }
}
