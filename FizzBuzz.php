<?php

class FizzBuzz
{
    // tous les multiples de 3 sont remplacés par Fizz
    // tous les multiples de 5 sont remplacés par Buzz
    // tous les multiples de 3 ET 5 sont remplacés par FizzBuzz
    //1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, ....

    public function count($value) : string{
        //Modifie some values and add some comments
        if($value % 3 === 0 && $value % 5 ===0) return "fizz buzz";
        if($value % 3 === 0) return "fizz";
        if($value % 5 === 0) return "buzz";

        return strval($value);
    }
}