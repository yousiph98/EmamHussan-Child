<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'country_id'=> 'exists:countries,id',
            'city_id'=> 'exists:cities,id',
            'status_id'=> 'exists:statuses,id',
            'department_id'=> 'exists:departments,id',
            'position_id'=> 'exists:positions,id',
            'user_id'=> 'exists:users,id',
        ];
    }
}
