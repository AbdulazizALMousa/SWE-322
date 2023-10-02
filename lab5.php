<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
class Courses {
public $Code;

public $Name;

public $Description;

public $Grade;


function set_Code($c1) {
$Code = $c1;
}

function set_name($c2) {
$Code = $c2;
}

function set_Description($c3) {
$Code = $c3;
}

function set_Grade($c4) {
$Code = $c4;
}

function get($Code) {
return $this->Code;
}

function get($name) {
return $this->Name;
}
function get($Description) {
return $this->Description;
}
function get($Grade) {
return $this->Grade;
}

public function Isit(){
if (this->Grade == "A+"){
return "true"
}
else false;


}
function Details(){
return $this->$Code
.$this->Name
.$this->Description
.$this->Grade

}


}

$C1 = new Course();
$C2 = new Course();
$C3 = new Course();


$C1->Set_Code("SWE322");
$C1->Set_name("Advance web design");
$C1->Set_Description("Php");
$C1->Set_Grade("A+");

 

$C2->Set_Code("SWE301");
$C2->Set_name("Software requirements");
$C2->Set_Description("Requirements");
$C2->Set_Grade("A+");

 

 


$C3->Set_Code("SWE300");
$C3->Set_name("Software process & modeling");
$C3->Set_Description("Diagrams");
$C3->Set_Grade("A+");

 


$CourseArray = [$C1,$C2,$C3];
echo "<table>";
echo "<tr> <th>Course Code</th>
<th>Course Name</th>
<th>Course Description</th>
<th>Course Grade</th>";
foreach($CourseArray as $Course){

echo "<tr>";

echo "<td>" $Course->get_Code"<td>";
echo "<td>".$Course->get_Name"<td>";
echo "<td>" .$Course->get_Description"<td>";
echo "<td>".$Course->get_Grade"<td>";
echo"<tr>";
}

echo "</table>";

 

 


?>
</body>
</html>
