<?php 

$array = array(1, 2, 3, 4, 5);

foreach ($array as $item) {
    echo "$item\n";
    $array[] = $item;
}

print_r($array);

?>