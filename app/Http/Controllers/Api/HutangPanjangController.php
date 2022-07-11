<?php

namespace App\Http\Controllers\API;

use App\Models\HutangPanjang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HutangPanjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hutangPanjang = HutangPanjang::all();

        return response()->json($hutangPanjang);
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
        $hutangPanjang = HutangPanjang::create( $request->all() );
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
        $hutangPanjang = HutangPanjang::find($id);
        return response()->json($hutangPanjang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(HutangPanjang $hutangPanjang)
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
        $hutangPanjang = HutangPanjang::find($id);
        $hutangPanjang->update( $request->all() );
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
        $hutangPanjang = HutangPanjang::find($id);
        $hutangPanjang->delete();

        return response()->json('data terhapus');
    }
}
