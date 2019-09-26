<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class PostRequest extends FormRequest
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
            'title'=>'required|max:255',
            'post_content'=>'required|min:5',
            'category'=>'required|exists:categories,id',
            'user'=>'required|exists:users,id',
            'image'=>'required|image|mimes:jpeg,bmp,png,jpg|max:1999',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => Lang::get('post.title-required'),
            'content.required' => Lang::get('post.content-required'),
            'image.required' => Lang::get('post.image-required'),
        ];
    }
}
