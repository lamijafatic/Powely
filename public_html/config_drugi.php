<?php
        $conn = mysqli_connect("localhost", "id20051437_root", "Kokograja123@", "id20051437_powely");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
     
        $email = $_REQUEST['email'];
        $sifra=$_REQUEST['sifra'];  
        $ime=$_REQUEST['ime'];
          $prezime=$_REQUEST['prezime'];
             $brojtelefona=$_REQUEST['brojtelefona'];
         
     
        $sql = "INSERT INTO login  VALUES ('$email','$sifra','$ime','$prezime','$brojtelefona')";
         
        if(mysqli_query($conn, $sql)){
           /*echo "<h3>Narudžba uspješno sačuvana."
                . " Hvala na kupovini!"
                . " Powely tim</h3>";*/
                header("Location:login_powely.html");
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
        