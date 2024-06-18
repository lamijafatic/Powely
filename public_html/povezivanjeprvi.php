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
        $ime = $_REQUEST['ime'];
        $prezime=$_REQUEST['prezime'];
        $adresa = $_REQUEST['adresa'];
        $grad = $_REQUEST['grad'];
        $drzava = $_REQUEST['drzava'];
        $brojtelefona = $_REQUEST['brojtelefona'];
        $email =$_REQUEST['email'];
        
        $brojkartice =$_REQUEST['brojkartice'];
        $cvc = $_REQUEST['cvc'];
        $imefirme = $_REQUEST['imefirme'];
        $proizvod = $_REQUEST['proizvod'];
        $velicina = $_REQUEST['velicina'];
        $boja = $_REQUEST['boja'];
        $kolicina = $_REQUEST['kolicina'];
        $firma = $_REQUEST['firma'];

        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO nabavka  VALUES ('$imefirme','$proizvod','$velicina','$boja','$kolicina','$firma','$ime','$prezime','$adresa','$grad','$drzava','$brojtelefona','$email','$brojkartice','$cvc')";
         
        if(mysqli_query($conn, $sql)){
          
           header("Location:naruceno.html") ;
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
