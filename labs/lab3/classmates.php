<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
li{ font-size:20px;
font-family: sans-serif;
color: orange;
}
p{
text-align: center;
font-size:20px;
color:green;
}
</style>
</head>
<body>
<?php
<!--Abdulaziz AL-Mousa -->
$classmates = array("faisal","Abdulaziz","Fahad");

echo "<h3> Course SWE 322 classmates are: </h3>";
echo "<ul>";
$arr_length=count($classmates);
for($i=0; $i<$arr_length;$i++){
    echo "<li>" .$classmates[$i]. "</li>";
}
echo "<ul>";


$course = array(
    "CIS 103" => "Programming fundementals I",
    "SWE 300" => "Software Process & modeling",
    "SWE 301" => "Software requirements"
);

echo"<h3> courses i took : <h3>";
echo"<table border=3>";
echo"<tr>";
echo"<h3>courses codes </th>";
echo"<h3>courses names </th>";

foreach($course as $code => $value){
    echo "<tr>";
echo "<td> $code</td>";
echo "<td> $value</td>";
echo "</tr>";
}



?>
</body>
</html>
