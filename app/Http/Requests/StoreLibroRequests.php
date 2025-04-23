<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequests extends FormRequest
{
    public function authorize():bool{
        return true;
    }
    public function rules():array{
        $rules =[
            'nombre'=>'required|string|max:50|unique:libro,nombre',
            'codigo'=> 'required|string|max:10',
            'autor'=> 'required|string|max:50'
        ];

        return $rules;
    }
}