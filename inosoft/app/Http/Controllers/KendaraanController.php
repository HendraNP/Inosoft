<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function show($id)
    {
       //return Kendaraan::where('id', '=', $id)->first();
        return Kendaraan::first();
    }
}
