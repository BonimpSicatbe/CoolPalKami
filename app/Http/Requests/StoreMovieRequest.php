<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|unique:movies,title',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'language' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'poster_url' => 'required|url',
            'trailer_url' => 'required|url',
        ];
    }
}
