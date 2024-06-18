<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','powely');

// get the post records

$duge_haljine = $_POST['duge_haljine'];
$kratke_haljine = $_POST['kratke_haljine'];
$suknje_ = $_POST['suknje_'];
$matching_outfit = $_POST['matching_outfit'];

// database insert SQL code
$sql = "INSERT INTO `powely` (`Redni_broj`, `Duge_haljine`, `Kratke_haljine`, `Suknje`, `Dvojni_outfiti`) VALUES ('1', '$duge_haljine', '$kratke_haljine', '$suknje_', '$matching_outfit')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>