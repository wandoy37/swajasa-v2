<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BenefitRequest extends FormRequest
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
        $rule_title_unique = Rule::unique('benefits', 'title');
        if ($this->method() !== 'POST') {
            $rule_title_unique->ignore($this->route()->parameter('id'));
        }
        return [
            'title' => ['required', 'min:3', $rule_title_unique],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Benefit wajib diisi',
            'title.min' => 'Benefit minimal 3 karakter',
            'title.unique' => 'Benefit telah dimiliki',
        ];
    }
}
