<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Kendaraan;

class Mobil extends Kendaraan
{
    private $mesin;
    private $kapasitas;
    private $tipe;
}
