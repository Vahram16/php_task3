<?php

// TASK 1
class ArrayLength
{
    private static $count;

    public static function getLength(array $arr)
    {

        foreach ($arr as $item) {

            if (is_array($item)) {
                if (count($item) > 0) {
                    self::getLength($item);
                }
            } else {

                self::$count++;
            }


        }
        return self::$count;

    }


}


//$arr = [1, [2, 3, [4, 5, 6, [7, 8]]], 9, 10, 1, 1, 1, [], []];
//echo ArrayLength::getLength($arr);


// TASK 2
function oddishOrEventish($value)
{
    $arrCount = str_split($value);
    $count = 0;
    for ($i = 0; $i < count($arrCount); $i++) {
        $count = $count + $arrCount[$i];
    }
    if ($count % 2) return 'Oddish';
    return 'Eventish';

}

//var_dump(oddishOrEventish(1191));


//TASK 3
function ifBrickFit($bH, $bW, $bD, $hW, $hH)
{

    if ($bW <= $hW && $bH <= $hH) return true;
    if ($bH <= $hW && $bW <= $hH) return true;

    if ($bW <= $hW && $bD <= $hH) return true;
    if ($bH <= $hH && $bD <= $hW) return true;

    if ($bH <= $hW && $bD <= $hH) return true;
    if ($bD <= $hW && $bH <= $hH) return true;

    return false;

}

// var_dump( ifBrickFit(1,2,1,1,1));