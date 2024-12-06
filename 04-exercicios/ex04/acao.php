<?php
$n1 = $_POST["num1"] ?? 0;
$i = 1 ?? 1;
$r = 0 ?? 0;
for($i = 1; $i <= 10; $i++){
    $r = $n1 * $i;
    echo "$n1 x $i = $r <br>";
}
?>