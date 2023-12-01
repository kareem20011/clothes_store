<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'name'=>'string|nullable',
            'description'=>'string|nullable',
            'logo'=>'image|nullable',
            'favicon'=>'image|nullable',
            'email'=>'email|nullable',
            'phone'=>'numeric|max:12|nullable',
            'address'=>'string|nullable',
            'facebook'=>'string|nullable',
            'instagram'=>'string|nullable',
            'twitter'=>'string|nullable',
            'youtube'=>'string|nullable',
            'tiktok'=>'string|nullable',
        ];
    }
}
