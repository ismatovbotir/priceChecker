<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class LoadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "file"=>["required", 'mimes:xls,xlsx'],
        ];
    }
    public function messages(){
        return [
            'file.required' => 'Файл не можеть быт пустим',
            'file.mimes'=>'Формат файла должно быть: xls,xlsx'

            
        ];
    }
}
