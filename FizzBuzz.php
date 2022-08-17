<?php

class FizzBuzz
{
    // tous les multiples de 3 sont remplacés par Fizz
    // tous les multiples de 5 sont remplacés par Buzz
    // tous les multiples de 3 ET 5 sont remplacés par FizzBuzz
    //1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, ....

    public function count($value) : string{
        if($value === 1) return "1";

        if($value === 3) return "fizz";

        return "2";
    }
}