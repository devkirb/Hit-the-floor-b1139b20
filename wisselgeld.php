<?php
$nummers1=array(
    $vijftig=50,
    $twintig=20,
    $tien=10,
    $vijf=5,
    $twee=2,
    $een=1
);
$input = $argv[1];
$inputRounded = intval($input);
if(!$inputRounded == 0) {
    foreach($nummers1 as $nummers2){
        if($input == $nummers2) {
            continue;
        }
        $amountX = floor($inputRounded / $nummers2);
        echo "$amountX times $nummers2" . PHP_EOL;
        $minus = $amountX * $nummers2;
        $inputRounded = $inputRounded - $minus;   
    }
} else {
    exit("> Je krijgt geen wisselgeld terug.");
} 

echo("used heroin needle");