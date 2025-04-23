<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
class UpdateLibroRequests extends StoreLibroRequests
{
    public function authorize(): bool{
        return true;
    }

    public function rules(): array{
        $rules = parent::rules();
        $rules['nombre'] = [
            'required',
            'string',
            'max:50',
            'unique:libro,nombre,'.$this->route('libro')->id,
        ];
        return $rules;
    }
}
