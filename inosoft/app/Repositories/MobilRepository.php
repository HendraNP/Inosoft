<?php
namespace App\Repositories;
use App\Interfaces\MobilRepositoryInterface;
use App\Models\Mobil;

use App\Interfaces\Request;

class MobilRepository implements MobilRepositoryInterface{
	public function newMobil(Request $request){
        $mobil = new Mobil();
        $mobil->Warna = $request->Warna;
        $mobil->Tahun = $request->Tahun;
        $mobil->Harga = $request->Harga;
        $mobil->Stok = $request->Stok;
        $mobil->Sold = 0;
        $mobil->Mesin = 'Mobil';
        $mobil->TipeSuspensi = $request->TipeSuspensi;
        $mobil->TipeTransmisi = $request->TipeTransmisi;
        $mobil->save();
        return "New Mobil Added";
    }
}
?>