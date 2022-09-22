<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignSubjectRequest extends FormRequest
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
            'class_id' => 'required',
            'subject_id' => 'required',
            'full_mark' => 'required',
            'pass_mark' => 'required',
            'subjective_mark' => 'required',
        ];
         // 'subject_id' => 'required|unique:assign_subjects,subject_id',
    }
    /**
     * validation messages
     */
    public function message()
    {
        return [
            'class_id.required' => 'Please Select the Class id',
            // 'class_id.unique' => 'class id Already Exist',
            'subject_id.required' => 'Please Select the Subject id',
            // 'subject_id.unique' => 'Subject id Already Exist',
            'full_mark.required' => 'Please input the correct score',
            'pass_mark.required' => 'Please Add pass mark',
            'subjective_mark.required' => 'Please Add Subjective mark'
        ];
    }
}
