<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
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
        $dan = $_REQUEST['dan'];
        $mjesec = $_REQUEST['mjesec'];
        $godina = $_REQUEST['godina'];
        $gender =$_REQUEST['gender'];
        $paymentmethod = $_REQUEST['paymentmethod'];
        $brojkartice =$_REQUEST['brojkartice'];
        $cvc = $_REQUEST['cvc'];
        $terms =$_REQUEST['terms'];
        $dugehaljine = $_REQUEST['dugehaljine'];
        $kratkehaljine = $_REQUEST['kratkehaljine'];
        $suknje = $_REQUEST['suknje'];
        $djeca = $_REQUEST['djeca'];
        $cipele =$_REQUEST['cipele'];
        $matchingoutfit = $_REQUEST['matchingoutfit'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO narudzba  VALUES ('$ime','$prezime','$adresa','$grad','$drzava','$brojtelefona','$email','$dan','$mjesec','$godina','$gender','$paymentmethod','$brojkartice','$cvc','$terms','$dugehaljine','$kratkehaljine','$suknje','$djeca','$cipele','$matchingoutfit')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Narudžba uspješno sačuvana."
                . " Hvala na kupovini!"
                . " Powely tim</h3>";
 
           /* echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");*/
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>