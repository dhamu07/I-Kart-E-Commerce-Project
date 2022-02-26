<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OnlyGmail implements Rule {

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
        if (strpos($value, '@gmail.com') !== false) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'Only gmail Id is allowed.';
    }
}
