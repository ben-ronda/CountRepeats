<?php

    class RepeatCounter {

        function CountRepeats($string, $count_word) {
            $string = strtolower($string);
            $count_word = strtolower($count_word);
            $array_of_words = explode(" ", $string);
            $count = 0;

            foreach ($array_of_words as $word){
                if ($word == $count_word){
                    ++$count;
                }
            }

            return $count;
        }
    }


?>
