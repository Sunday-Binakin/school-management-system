<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFeesCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:student_fees_categories,name'
        ];
    }
    /**
     * validation messages
     */
    public function message()
    {
        return [
            'name.required' => 'Please Add Student Fees Category',
            'name.unique' => 'This Fees Category Already Exist',
        ];
    }
}