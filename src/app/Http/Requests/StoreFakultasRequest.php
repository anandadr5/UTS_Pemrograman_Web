<?php

namespace App\Http\Requests;

use App\Models\Fakultas;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFakultasRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('fakultas_create');
    }

    public function rules()
    {
        return [
            'kode_fakultas' => [
                'string',
                'required',
            ],
            'fakultas' => [
                'string',
                'required',
            ],
            'program_studi' => [
                'string',
                'required',
            ],
            'mata_kuliah' => [
                'string',
                'required',
            ],
        ];
    }
}
