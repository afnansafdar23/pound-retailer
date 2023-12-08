<?php

namespace App\Http\Requests\ChildCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'name' =>   ['required', Rule::unique('parent_categories', 'name')->ignore($this->name)],
            'description' => 'required',
            'sub_name' => 'nullable',
            'sub_description' => 'nullable',
            'parent_category_id' => 'required'
        ];
    }
}
