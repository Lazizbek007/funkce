<?php
$pole = array('pomeranc', 'mango');
foreach ($pole as $key => $value){
echo $key . ". " . $value. "<br>";
} 

var_dump(strtoupper(string:'aasssd'));

$cislo= 45452545.5489554;

var_dump(round($cislo, precision:2));

$osloveni="Vitej uzivateli % na webu";
$jmeno="Lazizbek Amrillaev";
function osloveni(string $osloveni , string $jmeno){
    return str_replace(search:"%", $jmeno , $osloveni);
}

echo osloveni($osloveni, $jmeno) . "<br>";





?>