<?php

namespace App\Http\Requests\Auth\User;

use App\Models\User;
use App\Rules\MobileNumberRule;
use App\Rules\NameRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:50', new NameRule()],
            'last_name' => ['required', 'string', 'max:50', new NameRule()],
            'other_names' => ['nullable', 'string', 'max:50', new NameRule()],
            'mobile_number' => ['required', 'string', 'max:20', new MobileNumberRule(), Rule::unique(User::class)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }
}
