
<?php
function toggle_sort(&$a) {
    $i = 0;
    $lastindex = count($a) - 1;

    while ($i < $lastindex) {
        if ($a[$i] <= $a[$i+1]) {
            $i++;
        } else {
            $tmp = $a[$i];
            $a[$i] = $a[$i+1];
            $a[$i+1] = $tmp;
            if ($i) { $i--; }
        }
    }
}

$values = array(7, 3, 4, 6, 1);

toggle_sort($values);

foreach ($values as $v) { echo "{$v} "; }
?>