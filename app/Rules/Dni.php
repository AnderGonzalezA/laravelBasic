<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Dni implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      if(strlen($value)!==9) {
    		return false;
    	}

    	$value = strtoupper($value);

    	$letra = substr($value, -1, 1);
    	$numero = substr($value, 0, 8);

    	// Si es un NIE hay que cambiar la primera letra por 0, 1 ó 2 dependiendo de si es X, Y o Z.
    	$numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);

    	$modulo = $numero % 23;
    	$letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
    	$letra_correcta = substr($letras_validas, $modulo, 1);

    	if($letra_correcta!=$letra) {
    		return false;
    	}
    	else {
    		return true;
    	}
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
      return trans('validation.dni');
    }
}
