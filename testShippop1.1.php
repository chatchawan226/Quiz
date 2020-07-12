<?php

// $end = 10;
// for ( $a=1; $a <=$end; $a++) {
// print "<br>";
//   for ($i=$a; $i > 0; $i--) {
//    print "*";
//   }
// }

// $end = 5;
// for ($a = 1; $a <= $end; $a++) {
//   echo "<br>";
//   for ($i = $a; $i > 1; $i--) {
//       echo "o";
//   }
// }

$end = 5;
$row = array();
$row[0] = "o";
for ($i = 1; $i < $end; $i++) {
        $row[$i] = "o".$row[$i-1];
}
$result = implode("<br>", $row);
echo "<h1 align=right>" . $result . "</h1>";

?>
