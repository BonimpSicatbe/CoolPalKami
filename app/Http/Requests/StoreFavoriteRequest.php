<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFavoriteRequest extends FormRequest
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
            // 'user_id' => 'required|exists:users,id',
            // 'movie_id' => 'required|exists:movies,id',
            'user_id' => [
                'required',
                'exists:users,id',
                function ($attribute, $value, $fail) {
                    if (\App\Models\Favorite::where('user_id', $value)
                        ->where('movie_id', request()->movie_id)
                        ->exists()) {
                        $fail('The user has already favorited this movie.');
                    }
                },
            ],
            'movie_id' => 'required|exists:movies,id',
        ];
    }
}
