<?php

namespace App\Models;
use App\Models\Libro;
use App\Contracts\Rentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestamo extends Model implements Rentable
{
    use HasFactory;
    protected $table = 'prestamo';
    protected $fillable = ['fecha', 'lector', 'libro_id'];

    public function libro(): BelongsTo{
        return $this->belongsTo(Libro::class);
    }

    public function validateAvailability(int $id): bool{
        return !self::where('libro_id', $id)
                    //->whereNull('fecha_devolucion') // supondremos que si no tiene fecha de devolución está prestado
                    ->exists();
         
    }
}
