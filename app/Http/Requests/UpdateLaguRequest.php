<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaguRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'string'],
            'artis' => ['required', 'max:255', 'string'],
            'genre' => ['required', 'max:255', 'string'],
            'album' => ['required', 'max:255', 'string'],
            'audio' => ['required', 'mimes:mp3,flac,wav,webm'],
            'cover' => ['required', 'mimes:png,jpg,jpeg'],
        ];
    }
}
