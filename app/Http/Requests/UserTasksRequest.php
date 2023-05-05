<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserTasksRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string> 
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'task_id' => 'required',
            'remarks' => ['required', 'max:255'],
            'start_time' => 'required',
            'end_time' => 'required',
            'due_date' => 'required',
            "status_id" => 'required'
        ];
    }
}
