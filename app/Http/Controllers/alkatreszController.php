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


 



}
