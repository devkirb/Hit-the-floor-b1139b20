<?php
$nummers1=array(
 $een=1,
 $twee=2,
 $vijf=5,
 $tien=10,
 $twintig=20,
 $vijftig=50
);
$input = $argv[1];
$inputRounded = intval($input);
if(!$inputRounded == 0) {
foreach($nummers1 as $nummers2){
$amountOfx = floor($inputRounded / $nummers2);
echo "$amountOfx times $nummers2" . PHP_EOL;
$minus = $amountOfx * $nummers2;
$inputRounded = $inputRounded - $minus;   
}
} else {
exit("> Je krijgt geen wisselgeld terug.");
} 

echo("used heroin needle");