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

    public function newUnit(Request $request){
        return response()->json([
            'data' => $this->kendaraanRepository->newUnit($request)
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'data' => $this->kendaraanRepository->show($id)
        ]);
    }

    public function getStok($id){
        return response()->json([
            'data' => $this->kendaraanRepository->getStok($id)
        ]);
        //return Kendaraan::where('id', '=', intval($id))->get(['id','Stok','Motor','Mobil'])->first();
    }

    public function soldReport(){
        return response()->json([
            'data' => $this->kendaraanRepository->soldReport()
        ]);
    }

    public function soldItem(Request $request, $id){
        return response()->json([
            'data' => $this->kendaraanRepository->soldItem($request, $id)
        ]);
    }
}
