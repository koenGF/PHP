<?php
//  Multi-dimensional Source Array
//  https://stackoverflow.com/questions/3684463/php-foreach-with-nested-array


$newArray = [
    1, 2, 3,
    [4, 5],
    6,
    [7, [8, 9], 10]
];

//  Output array
displayArrayRecursively($newArray);

/**
 * Recursive function to display members of array with indentation
 *
 * @param array $arr Array to process
 * @param string $indent indentation string
 */
function displayArrayRecursively(array $arr, $indent='') {
    if ($arr) {
        foreach ($arr as $value) {
            if (is_array($value)) {
                //
                displayArrayRecursively($value, $indent . '-');
            } else {
                //  Output
                echo "$indent $value \n";
            }
        }
    }
}