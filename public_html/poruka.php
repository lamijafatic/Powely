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
        $poruka= $_REQUEST['poruka'];
     
       
        

        
         
        // Performing insert query execution
        // here our table name is college
$sql = "INSERT INTO poruka  VALUES ('$poruka')";
        if(mysqli_query($conn, $sql)){
          
           header("Location:index.php") ;
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
