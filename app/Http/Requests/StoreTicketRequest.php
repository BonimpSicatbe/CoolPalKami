<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'movie_id' => 'required|integer|exists:movies,id',
            'show_time' => 'required|date_format:Y-m-d H:i:s|unique:tickets,show_time,NULL,id,user_id,' . $this->user_id . ',movie_id,' . $this->movie_id,
        ];
    }
}
