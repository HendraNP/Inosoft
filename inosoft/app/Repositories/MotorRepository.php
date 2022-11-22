<?php
namespace App\Repositories;
use App\Interfaces\MotorRepositoryInterface;
use App\Models\Motor;

use App\Interfaces\Request;

class MotorRepository implements MotorRepositoryInterface{
	public function newMotor(Request $request){
        $motor = new Motor();
        $motor->Warna = $request->Warna;
        $motor->Tahun = $request->Tahun;
        $motor->Harga = $request->Harga;
        $motor->Stok = $request->Stok;
        $motor->Sold = 0;
        $motor->Mesin = 'Motor';
        $motor->TipeSuspensi = $request->TipeSuspensi;
        $motor->TipeTransmisi = $request->TipeTransmisi;
        $motor->save();
        return "New Motor Added";
    }
}
?>