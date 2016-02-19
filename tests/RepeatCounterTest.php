<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_oneLetter(){
            $test_RepeatCounter = new RepeatCounter;
            $string_input = "a";
            $count_input = "a";

            $result = $test_RepeatCounter->CountRepeats($string_input, $count_input);

            $this->assertEquals(1, $result);
        }


    }
?>
