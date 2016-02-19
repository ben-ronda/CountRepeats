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

        function test_oneWord(){
            $test_RepeatCounter = new RepeatCounter;
            $string_input = "and";
            $count_input = "and";

            $result = $test_RepeatCounter->CountRepeats($string_input, $count_input);

            $this->assertEquals(1, $result);
        }

        function test_multipleWords(){
            $test_RepeatCounter = new RepeatCounter;
            $string_input = "and and and";
            $count_input = "and";

            $result = $test_RepeatCounter->CountRepeats($string_input, $count_input);

            $this->assertEquals(3, $result);
        }

        function test_normalSentence(){
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "The Lion, the Witch, and the Wardrobe";
           $count_input = "the";

           $result = $test_RepeatCounter->CountRepeats($string_input, $count_input);

           $this->assertEquals(3, $result);
       }

       function test_variousCasing(){
          $test_RepeatCounter = new RepeatCounter;
          $string_input = "ThE Lion, tHe Witch, and THe Wardrobe";
          $count_input = "ThE";

          $result = $test_RepeatCounter->CountRepeats($string_input, $count_input);

          $this->assertEquals(3, $result);
      }
    }
?>
