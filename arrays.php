<?php


$names=["max","jane","jack","baron"];
$ages=[12,13,14,15,15,67,23,56,78];
echo $names[ 1];
echo"<br>";
echo $ages[6];
echo "<br>";
foreach ($names as $jina){

echo"$jina<br>";


}
echo"<br>";
echo sizeof($names);
echo"<br>";
array_push($names,"bush");
echo sizeof($names);
echo"<br>";
array_pop($names);
var_dump($names);
echo"<br>";
rsort($ages);
foreach($ages as $miaka){
 echo"$miaka<br>";


}
echo"<br>";
echo array_sum($ages);
echo"<br>";
$person=[ "names"=>"moha","ages"=>62,"color"=>"black","weight"=>58,"height"=>25];
echo $person["names"];
echo"<br>";
echo$person["ages"];
echo"<br>";
echo$person["color"];
echo"<br>";
echo$person["weight"];
echo"<br>";
echo$person["height"];
