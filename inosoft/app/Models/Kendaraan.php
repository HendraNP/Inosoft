<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Kendaraan';

    public function show($id)
    {
       return view('show', [
           'Kendaraan' => Kendaraan::where('_id', '=', $id)->first()
       ]);
    }
}
