<?php

namespace App\Http\Controllers;
use App\Models\Alkatresz;

use Illuminate\Http\Request;

class alkatreszController extends Controller
{
    public function alkatreszExportToJson()
    {
        $alkatreszs = Alkatresz::all();
        return response()->json($alkatreszs);
    }

    public function index()
    {
        $alkatreszs = Alkatresz::all();
        return view('alkatresz', compact('alkatreszs'));
    }
 



}
