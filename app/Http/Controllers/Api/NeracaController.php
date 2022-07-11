<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NeracaController extends Controller
{
    public function index()
    {
        $users = DB::table('koperasis')
        ->join('aktiva_lancars', 'tata_kelolas.koperasi_id', '=', 'koperasis.id')
        ->join('aktiva_tetaps as pr', 'pr.koperasi_id', '=', 'koperasis.id')
        ->join('agunans', 'agunans.koperasi_id', '=', 'koperasis.id')
        ->select('agunans.id_agunan', 'pr.id_profil_resiko')
        ->get();

        return response()->json($users);
    }
}
