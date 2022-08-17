<?php

use PHPUnit\Framework\TestCase;
require_once("FizzBuzz.php");

class FizzBuzzTest extends TestCase {
    public function testCountGiven1ShouldReturn1() : void {
        //Arrange : Prépapration des besoins pour pouvoir exécuter la fonction testé
        $fizzBuzz = new FizzBuzz();

        //Act : Lance la fonction que l'on souhaite tester
        //La variable $actual contiendra du coup le résultat (le return) de la fonction appelé
        $actual = $fizzBuzz->count(1);

        //Assert : vérfications des résultats de la fonction
        $this->assertEquals("1",$actual);
    }


    public function testCountGiven2ShouldReturn2() : void {
        //Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $actual = $fizzBuzz->count(2);

        //Assert
        $this->assertEquals("2", $actual);
    }

    public function testCountGiven3ShouldReturnFizz() : void {
        //Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $actual = $fizzBuzz->count(3);

        //Assert
        $this->assertEquals("fizz", $actual);
    }

//    public function testDemo() : void {
//        $this-> assertEquals(true, true);
//    }
}

