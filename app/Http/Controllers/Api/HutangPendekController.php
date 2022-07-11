<?php

namespace App\Http\Controllers;

use App\Models\HutangPendek;
use Illuminate\Http\Request;

class HutangPendekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hutangPendek = HutangPendek::all();

        return response()->json($hutangPendek);
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
        $hutangPendek = HutangPendek::create( $request->all() );
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
        $hutangPendek = HutangPendek::find($id);
        return response()->json($hutangPendek);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(HutangPendek $hutangPendek)
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
        $hutangPendek = HutangPendek::find($id);
        $hutangPendek->update( $request->all() );
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
        $hutangPendek = HutangPendek::find($id);
        $hutangPendek->delete();

        return response()->json('data terhapus');
    }
}
