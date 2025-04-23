<?php

namespace App\Http\Controllers;
use App\Contracts\Rentable;
use App\Http\Requests\StorePrestamoRequests;
use App\Services\PrestamoService;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    protected $prestamoService;
    public function __construct(PrestamoService $prestamoService)
    {
        $this->prestamoService = $prestamoService;
    }
    public function store(storePrestamoRequests $request)
    {
        $data = $request->validated();

        // Validamos si el libro ya está prestado
        if (!$this->prestamoService->validateAvailability($data['libro_id'])) {
            return response()->json([
                'message' => 'Este libro ya está prestado.'
            ], 409);
        }

        $prestamo = $this->prestamoService->createPrestamo($data);
        return response()->json($prestamo, 201);
    }
}
