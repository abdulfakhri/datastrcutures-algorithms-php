<?php
// function for bubble sort
function bubblesorter(&$Array, $n){

    $temp = null;

    for ($i = 0; $i < $n; $i++) {

        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($Array[$j] > $Array[$j + 1]) {

                $temp = $Array[$j];
                $Array = $Array[$j + 1];
                $Array[$j + 1] = $temp;
            }
        }
    }
}

// function to print array
function PrintArray($Array, $n){

    for ($i = 0; $i < $n; $i++) {
        echo $Array[$i] . " ";
        echo "\n";
    }
}

//test the code 
$MyArray = array(1, 10, 23, 50, 4, 9, -4);
$n = sizeof($MyArray);
echo "original array";
PrintArray($MyArray, $n);

bubblesorter($MyArray, $n);
echo "\nSorted Array\n";
PrintArray($MyArray, $n);

?>