<?php

namespace App\Http\Controllers;
use App\Interfaces\KendaraanRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;

class KendaraanController extends Controller
{
    private KendaraanRepositoryInterface $kendaraanRepository;

    public function __construct(KendaraanRepositoryInterface $kendaraanRepository) 
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function show($id)
    {
        return response()->json([
            'data' => $this->kendaraanRepository->show($id)
        ]);
        //return Kendaraan::where('id', '=', intval($id))->first();
    }

    public function getStok($id){
        return Kendaraan::where('id', '=', intval($id))->get(['id','Stok','Motor','Mobil'])->first();
    }

    public function soldReport(){
        return Kendaraan::get(['id','Sold','Motor','Mobil']);
    }

    public function soldItem(Request $request, $id){
        $kendaraan = Kendaraan::where('id', '=', intval($id))->first();
        $kendaraan = Kendaraan::find($kendaraan['_id']);
        $stok = $kendaraan->Stok;
        $sold = $kendaraan->Sold;
        $count = $request->count;
        if($stok < $count){
            return "Stok tidak cukup";
        }else{
            $stok-=$count;
            $sold+=$count;
            $kendaraan->Stok = $stok;
            $kendaraan->Sold = $sold;
            $kendaraan->save();
            return "Sold Kendaraan sejumlah ".$count." unit";
        }
    }
}
