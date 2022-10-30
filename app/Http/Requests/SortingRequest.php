<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SortingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'orderby' => [Rule::in(['name', 'email' ,'done'])],
            'direction' => [Rule::in(['asc', 'desc'])]
        ];
    }

    public function messages()
    {
        return [
            'orderby.in' =>'Передан некорректный параметр',
            'direction.in' =>'Передан некорректный параметр',
        ];
    }
}
