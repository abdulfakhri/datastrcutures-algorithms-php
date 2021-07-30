<?php

$customers = array(
    array('Derek', '123 Main', '123'),
    array('Sally', '122 Main', null),
    array('DR', '122 Main', 'x')
);

for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {

        echo $customers[$row][$col];
    }
    echo '<br>';
}
echo "<hr>";
function mult($x, $y)
{
    $x *= $y;
    return $x;
}
$prod = array_reduce($list, 'mult', 1);
print_r($prod);
echo '<br>';
