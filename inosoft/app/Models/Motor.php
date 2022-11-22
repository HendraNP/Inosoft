<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Kendaraan;

class Motor extends Kendaraan
{
    private $mesin;
    private $suspensi;
    private $transmisi;
}
