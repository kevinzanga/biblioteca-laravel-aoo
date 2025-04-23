<?php
namespace App\Services;

use App\Contracts\Rentable;
use App\Models\Prestamo;

 class PrestamoService implements Rentable{

    /*public function validateAvailability(int $id): bool{
        $prestamo = Prestamo::firstWhere('id', $id);
        return $prestamo;
    }*/
    public function validateAvailability(int $libroId): bool
    {
        // Verifica si ya hay un préstamo activo de ese libro
        return !Prestamo::where('libro_id', $libroId)->exists();
    }

    public function getAllPrestamos(){
        return Prestamo::all();  
    }

    public function createPrestamo(array $data){
        $prestamo = Prestamo::create($data);
        return $prestamo;
    }
 
 }