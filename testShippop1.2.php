<?php

// $end = 5;
// for ($a = 1; $a <= $end; $a++) {
//   echo "<br>";
//   for ($i = $end; $i > 0; $i--) {
//       echo ($i <= $a) ?"o" :"&nbsp;&nbsp;";
//   }
// }

$end = 5;
$row = array();
$row[0] = "o";
for ($i = 1; $i < $end; $i++) {
        $row[$i] = "o".$row[$i-1]."o";
}
$result = implode("<br>", $row);
echo "<h1 align=center>" . $result . "</h1>";


?>