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
        return "ข้อมูลที่ค้นหาไม่อยู่ใน List";
    }
    echo 'List : [' . $searchList . '] ' . "<br>";
    echo "Search : " . $searchNum . "<br>";
    echo "Result ::: <br>";
    $result =  search($arr, $searchNum);
    echo   $result;
} else if ($searchType == "Binary") {
    function binarySearch(array $arr, $x)
    {
        if (count($arr) === 0) return '';
        $low = 0;
        $high = count($arr) - 1;
        $round = '';
        $l =  1;
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($arr[$mid] == $x) {
                $round .=  "Round :" . $l . '===>' . $arr[$mid] . 'found !!' . "<br>";
                return $round;
            }
            if ($x < $arr[$mid]) {
                $high = $mid - 1;
                $round .= "Round :" . $l . '===>' . $x . '!=' . $arr[$mid] . "<br>";
            } else {
                $low = $mid + 1;
                $round .= "Round :" . $l . '===>' . $x . '!=' . $arr[$mid] . "<br>";
            }
            $l++;
        }
        $round = '';
        return $round;
    }
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
    echo "Original List :\n";
    echo implode(', ', $arr). "<br>";
    echo "\nSorted List\n:";
    echo implode(', ', bubble_Sort($arr)) . PHP_EOL;
}
