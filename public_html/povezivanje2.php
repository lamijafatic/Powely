<?php if(isset($_POST["submit"]))
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass ="";
    $database="powely";
    $narudžba="narudžba";
    $con = mysqli_connect("localhost","root","","powely");   
    if(!$con)
    {
      echo "Failed to conncet to MySQL:";
      exit();
    }
     $ime = $_POST['ime'];
    $prezime=$_POST['prezime'];
    $adresa = $_POST['adresa'];
    $grad = $_POST['grad'];
    $drzava = $_POST['drzava'];
    $broj_telefona = $_POST['broj_telefona'];
    $e_mail = $_POST['e_mail'];
    $dan = $_POST['dan'];
    $mjesec = $_POST['mjesec'];
    $godina = $_POST['godina'];
    $gender = $_POST['gender'];
    $payment_method = $_POST['payment_method'];
    $broj_kartice = $_POST['broj_kartice'];
    $cvc = $_POST['cvc'];
    $terms = $_POST['terms'];
    $duge_haljine = $_POST['duge_haljine'];
    $kratke_haljine = $_POST['kratke_haljine'];
    $suknje_ = $_POST['suknje_'];
    $djeca = $_POST['djeca'];
    $cipele_ = $_POST['cipele_'];
    $matching_outfit = $_POST['matching_outfit'];
    

    $sql = "INSERT INTO $narudžba (ime,prezime,adresa,grad,drzava,broj_telefona,e_mail,dan,mjesec,godina,gender,payment_method,broj_kartice,cvc,terms,duge_haljine,kratke_haljine,suknje_,djeca,cipele_,matching_outfit) 
    VALUES('$ime','$prezime','$adresa','$grad','$drzava','$broj_telefona','$e_mail','$dan','$mjesec','$godina','$gender','$payment_method','$broj_kartice','$cvc','$terms','$duge_haljine','$kratke_haljine','$suknje_','$djeca','$cipele_','$matching_outfit')";
    $rs=mysqli_query($con,$sql);
    if($rs)
    {
      echo "podaci uneseni";
    }
    else{
      echo "greska";
    }
    if($con->query($sql))
    {echo 
      '<script type="text/javascript">
      alert("Podaci su uneseni uspješno.");
    </script>';
   }
    if ($con->errno) 
    {echo '<script type="text/javascript">alert("Podaci nisu ispravno uneseni.");</script>';}
    $con->close();
    }   ?>