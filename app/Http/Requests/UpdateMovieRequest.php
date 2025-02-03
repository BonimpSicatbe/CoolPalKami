<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'title' => 'sometimes|string|max:255|unique:movies,title,' . $this->route('movie'),
            'description' => 'sometimes|string',
            'releaseDate' => 'sometimes|date',
            'duration' => 'sometimes|integer|min:1',
            'language' => 'sometimes|string|max:100',
            'country' => 'sometimes|string|max:100',
            'posterUrl' => 'sometimes|url',
            'trailerUrl' => 'sometimes|url',
        ];
    }
}
