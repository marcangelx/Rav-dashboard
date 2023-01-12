<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssessmentRequest extends FormRequest
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
            'resident_id' => ['required', 'unique:assessments', 'string', 'max:255'],
            'assessment_type' => ['required', 'string', 'max:255'],
            'facility_name' => ['required', 'string', 'max:255'],
            'clinical_category' => ['required', 'string', 'max:255'],
            'days' => ['required','numeric']
        ];
    }
}
