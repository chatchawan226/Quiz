<?php

$option1 = array('options' => array('default' => ''));
$option2 = array('options' => array('default' => 0));
$searchList = filter_input(INPUT_POST, 'searchList', FILTER_DEFAULT, $option1);
$searchNum = filter_input(INPUT_POST, 'searchNum', FILTER_DEFAULT, $option2);
$searchType = filter_input(INPUT_POST, 'searchType', FILTER_DEFAULT, $option1);

$arr = explode(",", $searchList);

if ($searchType == "Liner") {
    function search($arr, $x)
    {
        $round = '';
        // $sizeArr =  sizeof($arr) -1 ;
        for ($i = 0; $i < sizeof($arr); $i++) {
            $l = $i + 1;
            if ($arr[$i] == $x) {
                $round .=  "Round :" . $l . '===>' . $x . 'found !!' . "<br>";
                // $round[$i] = "Round :" . $l . '===>' . $x . 'found !!'."<br>";
                return $round;
            } else {
                $round .= "Round :" . $l . '===>' . $x . '!=' . $arr[$i] . "<br>";
                // $round[$i] = "Round :" . $l . '===>' . $x . '!=' . $arr[$i] ."<br>" ;
            }
        }
        return -1;
    }
    echo 'List : [' . $searchList . '] ' . "<br>";
    echo "Search : " . $searchNum . "<br>";
    echo "Result ::: <br>";
    $result =  search($arr, $searchNum);
    echo   $result;
} else if ($searchType == "Binary") {
    function binarySearch(array $arr, $x)
    {
        // check for empty array 
        if (count($arr) === 0) return '';
        $low = 0;
        $high = count($arr) - 1;
        $round = '';
        $l =  1;
        while ($low <= $high) {
            // compute middle index 
            $mid = floor(($low + $high) / 2);
            // element found at mid 
            if ($arr[$mid] == $x) {
                $round .=  "Round :" . $l . '===>' . $arr[$mid] . 'found !!' . "<br>";
                return $round;
            }
            if ($x < $arr[$mid]) {
                // search the left side of the array 
                $high = $mid - 1;
                $round .= "Round :" . $l . '===>' . $x . '!=' . $arr[$mid] . "<br>";
            } else {
                // search the right side of the array 
                $low = $mid + 1;
                $round .= "Round :" . $l . '===>' . $x . '!=' . $arr[$mid] . "<br>";
            }
            $l++;
        }
        // If we reach here element x doesnt exist 
        $round = '';
        return $round;
    }

    // Driver code 
    // $arr = array(1, 2, 3, 4, 5);
    // $value = 5;
    if (binarySearch($arr, $searchNum) != '') {
        echo 'List : [' . $searchList . '] ' . "<br>";
        echo "Search : " . $searchNum . "<br>";
        echo "Result ::: <br>";
        echo binarySearch($arr, $searchNum);
    } else {
        echo " กรุณากรอกข้อมูลให้ถูกต้อง";
    }
}
else if ($searchType == "Bubble") {
    function bubble_Sort($my_array)
    {
        do {
            $swapped = false;
            for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                if ($my_array[$i] > $my_array[$i + 1]) {
                    list($my_array[$i + 1], $my_array[$i]) =
                        array($my_array[$i], $my_array[$i + 1]);
                    $swapped = true;
                }
            }
        } while ($swapped);
        return $my_array;
    }
    //  $test_array = array(3, 0, 2, 5, -1, 4, 1);
    echo "Original List :\n";
    echo implode(', ', $arr). "<br>";
    echo "\nSorted List\n:";
    echo implode(', ', bubble_Sort($arr)) . PHP_EOL;
}
// echo  $searchList  .'</ฝbr>';
// echo  $searchNum  .'</br>';
// echo  $searchType .'</br>' ;
