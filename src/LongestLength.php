<?php
    function longestLength($string) {
        $length;
        $result = 0;
        
        $charArray = str_split($string);
        $uniqueCharArray = array();

        foreach($charArray as $char) {
            if(!in_array($char, $uniqueCharArray)) {
                array_push($uniqueCharArray, $char);
                $length = count($uniqueCharArray);

                $result = $result < $length ? $length : $result;
            } else {
                $uniqueCharArray = array();
            }
        }

        return $result;
    }
?>