<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'department_code' => 'required|string|max:20|unique:departments,department_code',
            'department_name' => 'required|string|max:255',
            'institution_id' => 'nullable|exists:institutions,id',
            'hod' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ];
    }
}