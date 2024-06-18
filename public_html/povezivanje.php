<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'powely');
i($con){
    echo"connected";
}
else{
    echo"not connected";
}

?>