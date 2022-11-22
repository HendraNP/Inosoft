<?php

namespace App\Http\Controllers;
use App\Interfaces\MotorRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;

class MotorController extends Controller
{
    private MotorRepositoryInterface $motorRepository;

    public function __construct(MotorRepositoryInterface $motorRepository) 
    {
        $this->motorRepository = $motorRepository;
    }

    public function newMotor(Request $request){
        return response()->json([
            'data' => $this->motorRepository->newMotor($request)
        ]);
    }
}
