<?php
// echo time();
// echo date('d/F/Y');
// echo microtime(true);
// var_dump(microtime(false));

// $mt = microtime(true);
// printf("%10.18f", $mt);

$startTime = microtime(true);
factorial(100);
sleep(2);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f", $executionTime);
function factorial($n){
    $result = 1;
    for ($i=1; $i <= $n; $i++) { 
        $result *= $i;
    }
    return $result;
}