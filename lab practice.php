<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$a = array(
"p1" => "orange",
"p2" => "banana",
"p3" => "apple");
echo array_values($a)[0];
echo"<br>";

echo count ($a);
echo"<br>";


foreach($a as $x => $value){
echo $value;

echo "<br>";
}

foreach($a as $x => $value){
if($x == "p2"){

echo $value;
}}
?>
</body>
</html>
