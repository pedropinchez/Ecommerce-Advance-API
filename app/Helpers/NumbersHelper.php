<?php

namespace App\Helpers;

/**
 * 
 */
class NumbersHelper
{

    public static function formattedCorrectNumber($number)
    {
        $numberFormatted = $number;
        if (substr($number, 0, 4) == "8801" && strlen($number) == 13) {
            $numberFormatted = $number;
        } else if (substr($number, 0, 2) == "01" && strlen($number) == 11) {
            $numberFormatted = "88" . $number;
        } else if (substr($number, 0, 1) == "1" && strlen($number) == 10) {
            $numberFormatted = "880" . $number;
        }
        return $numberFormatted;
    }

    public static function validateNumber($number)
    {
        $isValid = false;
        if (substr($number, 0, 4) == "8801" && strlen($number) == 13) {
            return true;
        } else if (substr($number, 0, 2) == "01" && strlen($number) == 11) {
            return true;
        } else if (substr($number, 0, 2) == "1" && strlen($number) == 10) {
            return true;
        }

        return $isValid;
    }

    public static function generateArraysFromNumbers($numberString, $isFromArray=false)
    {
        if(!$isFromArray){
            $number= str_replace("-","","$numberString");	
            $filtered_string = preg_replace('#\s+#',',', trim($number));
            $filtered_string = preg_split('/[\ \n\,]+/', $filtered_string);
            $filtered_string = preg_replace('/[^0-9]/', '', $filtered_string);
    
            $filtered_array = array_unique($filtered_string);
        }else{
            $filtered_array = array_unique($numberString);
        }
        
        $valid_array = [];

        // Get Valid Numbers
        foreach ($filtered_array as $key => $value) {
            if(NumbersHelper::validateNumber($value)){
                $valid_array [] = NumbersHelper::formattedCorrectNumber($value);
            }
        }
        $invalid_numbers = count($filtered_array) - count($valid_array);
        $data = [
            'numbers' => $valid_array,
            'count_invalid_numbers' => $invalid_numbers
        ];
        return $data;
    }
}
