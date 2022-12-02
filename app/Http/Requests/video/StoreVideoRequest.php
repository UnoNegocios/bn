<?php

namespace App\Http\Requests\video;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
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
            'title' => '',
            'description' => '',
            'short_description' => '',
            'downloadable' => '',
            'position' => '',
            'preview_image' => '',
            'duration' => '',
            'duration_in_seconds' => '',
            'permalink' => '',
            'difficulty' => '',
            'category_ids' => '',
            'file_path' => ''
        ];
    }
}
