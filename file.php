<?php
$x = 10;
$y = 15;

if ($x > $y) {
    echo "x is groter dan y";
} elseif($y > $x) {
    echo "y is groter dan x";
} else {
    echo "x en y zijn even groot";
}
function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
$arrayOne = [$x, $y];
//echo "<br>";
array_push($arrayOne,13);
$arrayOne["Koen"] = 13;
//print_r($arrayOne);

foreach ($arrayOne as $key => $value) {
    echo $arrayOne[$key] . "<br>";
}

echo "<br>";
//print_r($arrayOne);

$arrayTwo = [
    'one' => ['one', 'two',
        ['one', 'two', 'three']],
    'two' => ['four', 'five', 'six'],
    "three" => 3,
    "four" => "Hello"
];

$arrayThree =  array(
  1, 2, 3, 4, 5,5 , 5, 6,
  array (45, 2, 32, 12,2),
  array (5, 6, array(454, 454, 454), 43, [43, 3, [34, 3]])
);

JSC(loopThroughArray($arrayTwo));

function loopThroughArray($arrayOne, $return = ""): string
{
    foreach($arrayOne as $key => $value){
        if(is_array($arrayOne[$key])) $return = loopThroughArray($arrayOne, $return);
        if (!is_array($arrayOne[$key])) $return .= $arrayOne[$key];
    }
    return $return;
}