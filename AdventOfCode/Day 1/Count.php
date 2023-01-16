<?php
$input = file_get_contents('elfs.txt');
$inputArr = preg_split('/\r\n|\r|\n/', $input);
$finalArr = array();
$subArr = array();
foreach($inputArr as $val){
    if(!empty($val)){
        array_push($subArr, $val);
    }
    else{
        array_push($finalArr, $subArr);
        $subArr = array();
    }
}
array_push($finalArr, $subArr);

$maxCalories = 0;
$maxElf = 0;

for ($i = 0; $i < count($finalArr); $i++) {
    $currentElfCalories = array_sum($finalArr[$i]);
    if ($currentElfCalories > $maxCalories) {
        $maxCalories = $currentElfCalories;
        $maxElf = $i;
    }
}

echo $maxCalories;
?>
