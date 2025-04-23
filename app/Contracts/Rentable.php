<?php
namespace App\Contracts;

interface Rentable{
    public function validateAvailability(int $id): bool;
}