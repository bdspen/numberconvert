<?php
    require_once "src/NumbersToWords.php";
    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_NumberToWordConverter()
        {
            //Arrange
            $test_NumberToWords = new NumbersToWords;
            $input = "three";
            //Act
            $output = $test_NumbersToWords->numberToWordConverter($input);
            //Assert
            $this->assertEquals("3", $output);
        }
    }
 ?>
