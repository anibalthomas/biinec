<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidEmailDomain implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      if (str_contains($value, '@'))
      {
        $domain = explode('@', $value)[1];

        return $domain === 'inecol.mx';
      }
      return false;
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El dominio de tu email debe ser inecol.mx';
    }
}
