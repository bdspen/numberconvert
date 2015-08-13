<?php
    class NumbersToWords
    {
        function numberToWordConverter($input)
        {
            $split_input = str_split($input);
            $output_string = "";

            $ones = array(1 => 'one',
                        2    => 'two',
                        3    => 'three',
                        4    => 'four',
                        5    => 'five',
                        6    => 'six',
                        7    => 'seven',
                        8    => 'eight',
                        9    => 'nine'
                    );
            $tens = array(10    => 'ten',
                        11    => 'eleven',
                        12    => 'twelve',
                        13    => 'thirteen',
                        14    => 'fourteen',
                        15    => 'fifteen',
                        16    => 'sixteen',
                        17    => 'seventeen',
                        18    => 'eighteen',
                        19    => 'nineteen',
                        20    => 'twenty',
                        30    => 'thirty',
                        40    => 'forty',
                        50    => 'fifty',
                        60    => 'sixty',
                        70    => 'seventy',
                        80    => 'eighty',
                        90    => 'ninety'
                    );

                                $output = $ones[$split_input];

                    var_dump($split_input);
                    return $output;
                
        }
    }
 ?>
