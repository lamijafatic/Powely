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
         
     
        /*$email = $_REQUEST['email'];
        $sifra=$_REQUEST['sifra'];
       
         
     
        $sql = "INSERT INTO login  VALUES ('$email','$sifra')";
         
        if(mysqli_query($conn, $sql)){
           /* echo "<h3>Narudžba uspješno sačuvana."
                . " Hvala na kupovini!"
                . " Powely tim</h3>";
                header("Location:index.php");
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);*/
        
        
        session_start(); 



if (isset($_POST['email']) && isset($_POST['sifra'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $sifra = validate($_POST['sifra']);

    if (empty($email)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($sifra)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM login WHERE email='$email' AND sifra='$sifra'";

        $result = mysqli_query($conn, $sql);
           /*if (mysqli_num_rows($result) === 1) {*/

            $row = mysqli_fetch_assoc($result);
          /* }*/


            if ($row['email'] === $email && $row['sifra'] === $sifra) {

                /*echo "Logged in!";*/

                 header("Location: narudzba.html");

                exit();

            }
        else{
            echo"Pogresna sifra ili email!";
        }
    }}
            
        ?>