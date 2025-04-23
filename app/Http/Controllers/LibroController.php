<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibroRequests;
use App\Http\Requests\UpdateLibroRequests;
use App\Services\LibroService;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    protected $libroService;
    public function __construct(LibroService $libroService)
    {
        $this->libroService = $libroService;
    }

    public function index()
    {
        $libro = $this->libroService->getAllLibros();
        //$libro = \App\Models\Libro::all(); 
        return response()->json($libro);
    }
    
    public function show($id)
    {
        $libro = $this->libroService->getLibroById($id);
        return response()->json($libro);
    }

   
    public function store(StoreLibroRequests $request)
    {
        $libro = $this->libroService->createLibro($request->validated());
        return response()->json($libro);
    }

    public function update(UpdateLibroRequests $request, Libro $libro){
        $this->libroService->updateLibro($libro, $request->validated());
        return response()->json($libro);
    }
}
