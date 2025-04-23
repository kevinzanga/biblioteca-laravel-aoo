<?php

namespace App\Models;
use App\Models\Prestamo;
use App\Contracts\Rentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model implements Rentable
{
    use HasFactory;
    protected $table = 'libro';
    protected $fillable = ['nombre', 'codigo', 'autor'];
    public function prestamo(){
        return $this->HasMany(Prestamo::class);
    }


    public function validateAvailability(int $id): bool{
        //return self::where('id', $id)->exists();
        return !Prestamo::where('libro_id', $id)->exists();
    }

}
