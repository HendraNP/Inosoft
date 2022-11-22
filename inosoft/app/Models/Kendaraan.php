<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Kendaraan';
    private $id;
    private $tahun;
    private $harga;
    private $stok;
    private $sold;
}
