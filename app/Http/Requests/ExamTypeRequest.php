<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamTypeRequest extends FormRequest
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
            'name' => 'required|unique:exam_types,name'
        ];
    }
    /**
     * validation messages
     */
    public function message()
    {
        return [
            'name.required' => 'Please Add Exam Type',
            'name.unique' => 'Exam Type Already Exist',
        ];
    }
}
