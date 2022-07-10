<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
        $rule_title_unique = Rule::unique('services', 'title');
        if ($this->method() !== 'POST') {
            $rule_title_unique->ignore($this->route()->parameter('id'));
        }

        return [
            // 'title' => 'required|unique:services|min:3|',
            'title' => ['required', 'min:3', $rule_title_unique],
            'description' => 'required',
            'content' => 'required',
            'icon' => 'image|file|max:2048',
            'sampul' => 'image|file|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title wajib diisi',
            'title.min' => 'Title minimal 3 karakter',
            'title.unique' => 'Title telah dimiliki',
            'description.required' => 'Description wajib diisi',
            'content.required' => 'Content wajib diisi',
        ];
    }
}
