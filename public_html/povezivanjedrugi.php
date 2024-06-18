<?php
         
       
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "id20051437_root", "Kokograja123@", "id20051437_powely");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $imeuposlenika = $_REQUEST['imeuposlenika'];
        $prezimeuposlenika=$_REQUEST['prezimeuposlenika'];
        $email =$_REQUEST['email'];
        $adresa = $_REQUEST['adresa'];
        $grad = $_REQUEST['grad'];
       
        $brojtelefona = $_REQUEST['brojtelefona'];
        
        
        $dan =$_REQUEST['dan'];
        $mjesec = $_REQUEST['mjesec'];
        $godina = $_REQUEST['godina'];
        $spol = $_REQUEST['spol'];
        $odjel = $_REQUEST['odjel'];
        $plata = $_REQUEST['plata'];
        

        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO radnici  VALUES ('$imeuposlenika','$prezimeuposlenika','$email','$adresa','$grad','$brojtelefona','$dan','$mjesec','$godina','$spol','$odjel','$plata')";
         
        if(mysqli_query($conn, $sql)){
          
           header("Location:uneseno.html") ;
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
