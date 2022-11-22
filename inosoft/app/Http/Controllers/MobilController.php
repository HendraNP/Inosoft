<?php

namespace App\Http\Controllers;
use App\Interfaces\MobilRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;

class MobilController extends Controller
{
    private MobilRepositoryInterface $mobilRepository;

    public function __construct(MobilRepositoryInterface $mobilRepository) 
    {
        $this->mobilRepository = $mobilRepository;
    }

    public function newMobil(Request $request){
        return response()->json([
            'data' => $this->mobilRepository->newMobil($request)
        ]);
    }
}
