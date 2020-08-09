<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditFormRequest extends FormRequest
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
            'name' => 'required|max:255',
<<<<<<< HEAD
            'imagen' => 'image|mimes:jpeg,bpm,png',
=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
            'password' => 'required|min:6|confirmed'

        ];
    }
}
