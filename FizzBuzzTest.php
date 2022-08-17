<?php

use PHPUnit\Framework\TestCase;
require_once("FizzBuzz.php");

class FizzBuzzTest extends TestCase {
    public function testCountGiven1ShouldReturn1() : void {
        //Arrange : Prépapration des besoins pour pouvoir exécuter la fonction testé
        $fizzBuzz = new FizzBuzz();

        //Act : Lance la fonction que l'on souhaite tester
        //La variable $actual contiendra du coup le résultat (le return) de la fonction appelé
        $actual = $fizzBuzz->count();

        //Assert : vérfications des résultats de la fonction
        $this->assertEquals("1",$actual);
    }


    public function testCountGiven2ShouldReturn2() : void {
        //Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $actual = $fizzBuzz.count();

        //Assert
        $this->assertEquals("2", $actual);
    }

//    public function testDemo() : void {
//        $this-> assertEquals(true, true);
//    }
}

