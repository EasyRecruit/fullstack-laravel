<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;


class NameRule implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        if ($value && !preg_match('/^[a-zA-Z]([\w -]*[a-zA-Z])?$/', $value)) {
            $fail('The :attribute must be a valid name.');
        }
    }
}
