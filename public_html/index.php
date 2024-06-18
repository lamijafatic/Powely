
<html>
    <head>
        <title>Dobrodošli</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="shop.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script>
        var pos = 0;
        
        var direction =1;
        function Move() {
            obj = document.getElementById("welcome");
            pos += direction;
            
            if (pos >= 100 || pos <= -100) direction =0 - direction;
            obj.style.left = pos;
            window.setTimeout("Move();", 25);
        }
    </script>
    </head>
    <body onLoad="Move();">
        <div class="header">
		   
            <div class="sredina">
            <div id="logo-i-social">
			 
               <div id="logo-holder">
                      <img class="logo" alt="Logo" src="logoshop.svg">  
                 </div>
				 <div class="search">
				 <a href="#" class="onlineshoplink" id="linkshop">
				  <span id="onlineshopnaslov">Naruči</span>
				  <img src="korpa.svg" alt="korpa" class="korpa">
				  </a>
				 </div>  
               <div id="social-holder">
                  <a  href="https://hr-hr.facebook.com/">
                       <img class="ikone" src="fb.svg"></a>
                 
                 
                  <a  href="instagram.html">
                     <img class="ikone" src="instagram.svg"> </a>
                     <a  href="login_powely.html">
                     <img  id="login" src="login_ikona.svg" style="width:50px;"> </a>
                      </div> 
               
              </div>
             <nav id="main-menu">
                <a class="aktivna" href="#logo-holder">Početna</a>
                <a href="#novo">Novo</a>
                <a href="#haljine">Haljine</a>
                <a href="#suknje">Suknje</a> 
                 <a href="#cipele">Cipele</a>		   
                 <a href="#kontakt">Kontakt</a>
				 
             </nav>
                 </div>
            
             
       </div> 
	  
	  <div id="pocetna" class="stranica">
	        <div  id="pocetna1" class="sredina">
			<p class="welcome" id="welcome">DOBRODOŠLI</p> 
			<img class="naslovna" src="naslovna8.jpg">
			<div class="ikonemale">
			<img id="shoppingbag" src="shoppingbag1.svg">
			<img id="ikonahaljina" src="ikonahaljina.svg">
			<img id="ikonasuknja" src="ikonasuknja.svg">
			<img id="ikonacipele" src="ikonacipela1.svg">
			<img id="ikonahaljina2" src="ikonahaljina2.svg">
			
			
			
			</div>
			

			
			
			
			</div>
	  </div>
	  <div id="novo" class="stranica">
	       <div id="novo1" class="sredina">
		   <p class="prvo">&#10047;Nova kolekcija Jesen 2022&#10047; </p>
			<p class="drugo">Zlatni duh prirode</p>
			<p class="trece">Neka priroda prati tvoj sjaj sa sedam novih dizajniranih haljina napravljenih sa ljubavlju i inspirisanih sa unikatnim bojama i umjetnosti prirode...</p>
			
			<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 10 </div>
  <img class="slike" src="haljina7.jpg" >
  <div class="text">Royal</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 10</div>
  <img class="slike" src="haljina2.jpg" style="width:100%">
  <div class="text">Strong Eda</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img class="slike" src="haljina2_2.jpg" style="width:100%">
  <div class="text">Strong Eda</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img class="slike" src="haljina3.jpg" style="width:100%">
  <div class="text">Copper road</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 10</div>
  <img class="slike" src="haljina3_2.jpg" style="width:100%">
  <div class="text">Copper road</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img class="slike" src="hajina4.jpg" style="width:100%">
  <div class="text">Forest fairy</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img class="slike" src="haljina5.jpg" style="width:100%">
  <div class="text">Soft dreams</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img class="slike" src="haljina6.jpg" style="width:100%">
  <div class="text">Young dreams</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 10</div>
  <img class="slike" src="haljina1.jpg" style="width:100%">
  <div class="text">Autumn princess</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 10</div>
  <img class="slike" src="haljina1_2.jpg" style="width:100%">
  <div class="text">Autumn princess</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span>   
</div>
			</div>
	  </div>
	  <div id="haljine" class="stranica">
	       <div id="izrod" class="sredina">
		   <p id="dresses">&#10047;Haljine</p>
		       <div class="vrstehaljina">
			       <div class="slikesve" id="div1">
				       <img id="slika1"  alt="1" src="longdresses.jpg" >
			      <div class="okvir-texta" id="okvir1">
				     <a class="linkovvi" href="longdresses.html">Duge haljine</a>
				   </div>
			   
			   
			   </div>
			   <div class="slikesve" id="div2">
				       <img id="slika2"  alt="2" src="short1.jpg" >
			      <div class="okvir-texta" id="okvir2">
				     <a class="linkovvi" href="shortdresses.html">Kratke haljine</a>
				   </div>
			   
			   
			   </div>
			   <div class="slikesve" id="div3">
				       <img id="slika3"  alt="3" src="djecijehaljine.jpg" >
			      <div class="okvir-texta" id="okvir3">
				     <a class="linkovvi" href="Kids.html">Djeca</a>
				   </div>
			   
			   
			   </div>
			   <div class="slikesve" id="div4">
				       <img id="slika4"  alt="4" src="mama1.jpg" >
			      <div class="okvir-texta" id="okvir4">
				     <a class="linkovvi" href="matching.html">Dvojni outfiti</a>
				   </div>
			   
			   
			   </div>
		   
		   
			</div>
	  </div>
	  </div>
	  <div id="suknje" class="stranica">
	      <div id="novo2" class="sredina">
		  <p id="skirts">&#10047;Suknje</p>
		  <div class="suknjesve">
		   <div class="slikesvesuknji" id="div1s">
				       <img id="slika1s"  alt="1" src="suknja1.jpg" >
			      <div class="okvir-textas" id="okvir1s">
				     <a class="linkovvis" href="snizenje.html" style="color:yellow;">Sniženje</a>
				   </div>
			   
			   
			   </div>
			    <div class="slikesvesuknji" id="div2s">
				       <img id="slika2s"  alt="1" src="new.jpg" >
			      <div class="okvir-textas" id="okvir2s">
				     <a class="linkovvis" href="new.html">Novo</a>
				   </div>
			   
			   
			   </div>
			    <div class="slikesvesuknji" id="div3s">
				       <img id="slika3s"  alt="1" src="seeall.jpg" >
			      <div class="okvir-textas" id="okvir3s">
				     <a class="linkovvis" href="skirts.html">Vidi sve</a>
				   </div>
			   
			   
			   </div>
		  
		  </div>
		  
		  
			</div>
	  </div>
	  <div id="cipele" class="stranica">
	      <div id="novo3" class="sredina">
		  <br>
		  <span class="shoes">&#10047;Cipele</span><span class="shoesadd">Neka vaša stopala dobiju slobodu i glamurozan izgled sa našom kolkecijom...</span>
		  <span id="izdvojeno">Izdvojeno</span>
		  
		         <div class="slikeiispod">
				       <div class="slikeizdvojene">
					 
					     <img src="izdvojena1.jpg" id="slika1izdvojeno" name="slikal" onClick="javascript:zumiraj(2)"  onmouseover="javascript:zumiraj(1)">
				         <img src="izdvojena2.1.jpg" id="slika2izdvojeno">
						 <img src="izdvojena3.jpg" id="slika3izdvojeno">
					   
					   </div>
					   <div class="ispod">
					      <a href="fff" id="okvirtexta1">Wedding Gloo<p class="ispisi">bijela,crna,srebrena<br>&dollar;175</p></a>
						   <a href="ddd" id="okvirtexta2">Pink Awa<p class="ispisi">classic,glam<br>&dollar;199</p></a>
						    <a href="ddd" id="okvirtexta3">Classic Zandy<p class="ispisi">crvena,zelena,žuta</p><span style="color:red">&dollar;69</span></a>
					   
					   
					   </div>
				 
				 
				 </div>
				 <span id="izdvojeno">Ostalo</span>
				 <div class="slikeiispod2">
				     <div class="ostale">
					       <img src="prva.jpg" id="slika1ostalo" >
						    <img src="druga.jpg" id="slika2ostalo" >
							 <img src="treca.jpg" id="slika3ostalo" >
							  <img src="cetvrta.jpg" id="slika4ostalo" >
							   <img src="peto.png" id="slika5ostalo" >
							   <img src="strelica.svg" id="strelica" >
					 </div>
					 <div class="ispod2">
					 <a href="fff" id="okvirtexta21">Open Lea<p class="ispisi">srebrena,zlatna,tamno plava</p><span id="ispis1" style="color:red">&dollar;75</span></a>
					 <a href="fff" id="okvirtexta22">Winky L<p class="ispisi">plava,bijela,boja kože<br>&dollar;125</p></a>
					 <a href="fff" id="okvirtexta23">Big Ema<p class="ispisi">roza,ljubičasta,svijetlo zelena<br>&dollar;169</p></a>
					 <a href="fff" id="okvirtexta24">Bow Fantasy<p class="ispisi">bebi roza<br>&dollar;129</p></a>
					 <a href="fff" id="okvirtexta25">Polly<p class="ispisi">zlatna,srebrena<br>&dollar;175</p></a>
					 <a href="fff" id="okvirtexta26">VIDI SVE</a>
					 </div>
				 
				 
				 </div>
				 
			</div>
	  </div>
	  <div id="kontakt" class="stranica">
	      <div class="sredina">
		  <h1 id="contact">Kontakt</h1>
			<div class="cijelikontakt">
			   <div class="adrese">
			   <p id="l"><strong><i>Naše lokacije</i> </strong></p>
			   145 Kinloch Street<br>
			   Invercargill,<b>Grasmere</b><br>
			   Zip code 9810<br>
			   <b>Novi Zeland</b><br>
			   <br>
			   Kurfürstenstraße 32<br>
			   Baden-Württemberg,<b>Walheim</b><br>
			   Zip code 74399<br>
			   <b>Njemačka</b>
	
			   </div>
			   <div class="linkovi">
			   <strong>E-mail</strong> <br><br>
			   <b>Info</b><br>
			   <a href="mailto:podrska@resenja.org">powely@customers_info.org</a><br>
			  <b>Bussiness</b><br>
			  <a href="mailto:podrska@resenja.org">powely@bussiness_i.org</a><br>
			  
			   </div>
			   <iframe class="mapa" width="600"
			height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
			src="https://www.openstreetmap.org/export/embed.html?bbox=168.34539949893954%2C-46.3841819429211%2C168.35042059421542%2C-46.38195790922043&amp;layer=mapnik&amp;marker=-46.383071787673536%2C168.34791004657745" 
			style="border: 1px solid black"></iframe>
			
			
			</div>
			
			
			
			</div>
	  </div>
	  	  <div class="ubistvo">
		<div class="sredina">
		    <a style="font-family:Lucida Handwriting; font-size:25px; font-weight:bold; text-decoration:none; color:red;"href="mapa.html">Nadolazeća revija</a>
<form action="poruka.php" >
	<span id="pitanjee">&#10047;Imate pitanje?</span>
	<br>
		<label for="subject" id="poruku">Ostavite poruku</label>
		<textarea id="subject" name="poruka" placeholder="Upiši poruku..." style="height:200px"></textarea>
	
		<input type="submit" value="Pošalji" id="submitt">
	  </form>
<br>
	 
	</div>
</div>
	  <div id="kraj" class="footer">
	  <div class="sredina">
	     <div class="footerlijevo footer-sredina">
		 <a class="red-link" href="#logo-i-social">Početna</a> <br>
	       <a  class="red-link" href="#novo">Novo</a> <br>
		   <a class="red-link" href="#haljine">Haljine</a><br>
		   <a class="red-link" href="podaci.html">Podaci o browseru</a>
		   </div>
		 
		 
		 
		 <div class="footersredina footer-sredina">
		 &copy;Powely<br>
		 Powely dizajnerska odjeća<br>
		 Novi Zeland<br>
		 Dress like a princess..</div>
		 <div class="footerdesno footer-sredina">
		 <a class="red-link" href="#suknje">Haljine</a> <br>
	       <a  class="red-link" href="#cipele">Cipele</a> <br>
		   <a class="red-link" href="#kontakt">Kontakt</a>
		   </div>
		 
		 </div>
	  </div>
	  <div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
		  <span class="close">&times;</span>
		  <div class="container">
		<form action="insert.php" method="post">
		<div class="row">
		<h4>Izaberite željeni proizvod</h4>
		<p>Duge haljine:</p>
		<select name="dugehaljine" id="duge_haljine">
		  <option value="Alex Evening">Alexis Evening</option> 
		  <option value="Lennon Jadore">Lennon Jadore</option>
		  <option value="Macey Soft">Macey Soft</option>
		  <option value="Mermaid Gown">Mermaid Gown</option>
		  <option value="Gentle Lilith">Gentle Lilith</option>
		  <option value="Talia Evening">Talia Evening</option>
		  <option value="Jane Coctail">Jane Coctail</option>
		  <option value="Glam Lainey">Glam Lainey</option>
		  <option value="Camila(Two-piece)">Camila(Two-piece)</option>
		  <option value="Amora">Amora</option>
		  <option value="Long Valentina">Long Valentina</option> 
		  <option value="Amari">Amari</option>
		  <option value="Regina">Regina</option>
		  <option value="Adelaide">Adelaide</option>
		  <option value="Sofia(special ed)">Sofia(special ed)</option>
		  <option value="Willa Amaro">Willa Amaro</option>
		  <option value="Light Queen">Light Queen</option>
		  <option value="Swella(special ed)">Swella(special ed)</option>
		  <option value="Annna">Anna</option>
		  <option value="Zendella(special ed)">Zendella(special ed)</option>
	  
		  <option value="April Dress">April Dress</option> 
		  <option value="Esther Jadore">Esther Jadore</option>
		  <option value="Lily Sophia">Lily Sophia</option>
		  <option value="Gigi Strapeless">Gigi Strapeless</option>
		  <option value="Candy Zana">Candy Zana</option>
		  <option value="Ruched Soft">Ruched Soft</option>
		  <option value="Ada Off">Ada Off</option>
		  <option value="Alivia Jadore">Alivia Jadore</option>
		  <option value="Reese One Shoulder">Reese One Shoulder</option>
		  <option value="Crepe">Crepe</option>
		  <option value="Long Less Demoiselle">Long Less Demoiselle</option> 
		  <option value="Cataleya">Cataleya</option>
		  <option value="Mariah(two piece)">Mariah(two piece)</option>
		  <option value="Collins Glam">Collins Glam</option>
		  <option value="Ola Glam">Ola Glam</option>
		  <option value="Portia Scarlet">Portia Scarlet</option>
		  <option value="Delhi by Tania">Delhi by Tania</option>
		  <option value="Paige">Paige</option>
		  <option value="Red Gold(limited)">Red Gold(limited)</option>
		  <option value="Easy Rose">Easy Rose</option>
		</select>
		<br><br>
		  <p>Kratke haljine:</p>
	  
		<select name="kratkehaljine" id="kratkehaljine">
		  <option value="White Glow">White Glow</option> 
		  <option value="Portia short">Portia short</option>
		  <option value="Sosiy Epo">Sosiy Epo</option>
		  <option value="Valeny">Valeny</option>
		  <option value="Orlitta">Orlitta</option>
		  <option value="Eveny">Eveny</option>
		  <option value="Lea B">Lea B</option>
		  <option value="Rosana">Rosana</option>
		  <option value="Kasy Glam">Kasy Glam</option>
		  <option value="Stormy">Stormy</option>
		  <option value="Short Iviny">Short Iviny</option> 
		  <option value="Karla">Karla</option>
		  <option value="Polly">Polly</option>
		  <option value="Annie D">Annie D</option>
		  <option value="Farse">Farse</option>
		  <option value="Ticka">Ticka</option>
		  <option value="Azul">Azul</option>
		  <option value="Swenny">Swenny</option>
		  <option value="Lominus">Lominus</option>
		  <option value="Short Pinky">Short Pinky</option>
	  
	  
		</select>
		<br><br>
		<p>Suknje:</p>
	  
	  <select name="suknje" id="suknje_">
		<option value="White Glow">White Glow</option> 
		<option value="Portia short">Portia short</option>
		<option value="Sosiy Epo">Sosiy Epo</option>
		<option value="Valeny">Valeny</option>
		<option value="Orlitta">Orlitta</option>
		<option value="Eveny">Eveny</option>
		<option value="Lea B">Lea B</option>
		<option value="Rosana">Rosana</option>
		<option value="Kasy Glam">Kasy Glam</option>
		<option value="Stormy">Stormy</option>
		<option value="Short Iviny">Short Iviny</option> <!--8 snizenje,3 novo,10 sve-->
		<option value="Karla">Karla</option>
		<option value="Polly">Polly</option>
		<option value="Annie D">Annie D</option>
		<option value="Farse">Farse</option>
		<option value="Ticka">Ticka</option>
		<option value="Azul">Azul</option>
		<option value="Swenny">Swenny</option>
		<option value="Lominus">Lominus</option>
		<option value="Short Pinky">Short Pinky</option>
		<option value="Short Pinky">Short Pinky</option>
	  
	  
	  </select>
	  <br><br>
	  <p>Dvojni outfiti:</p>
	  
	  <select name="matchingoutfit" id="matchingoutfit">
	  <option value="White Glow">White Glow</option> 
	  <option value="Portia short">Portia short</option>
	  <option value="Sosiy Epo">Sosiy Epo</option>
	  <option value="Valeny">Valeny</option>
	  <option value="Orlitta">Orlitta</option>
	  <option value="Eveny">Eveny</option>
	  <option value="Lea B">Lea B</option>
	  <option value="Rosana">Rosana</option>
	  <option value="Kasy Glam">Kasy Glam</option>
	  <option value="Stormy">Stormy</option>
	  <option value="Short Iviny">Short Iviny</option> 
	  <option value="Karla">Karla</option>
	  <option value="Polly">Polly</option>
	  <option value="Annie D">Annie D</option>
	  <option value="Farse">Farse</option>
	  <option value="Ticka">Ticka</option>
	  <option value="Azul">Azul</option>
	  <option value="Swenny">Swenny</option>
	  <option value="Lominus">Lominus</option>
	  <option value="Short Pinky">Short Pinky</option>
	  
	  
	  
	  </select>
	  <br><br>
	  <p>Djeca:</p>
	  
	  <select name="djeca" id="djeca">
	  <option value="White Glow">White Glow</option> 
	  <option value="Portia short">Portia short</option>
	  <option value="Sosiy Epo">Sosiy Epo</option>
	  <option value="Valeny">Valeny</option>
	  <option value="Orlitta">Orlitta</option>
	  <option value="Eveny">Eveny</option>
	  <option value="Lea B">Lea B</option>
	  <option value="Rosana">Rosana</option>
	  <option value="Kasy Glam">Kasy Glam</option>
	  <option value="Stormy">Stormy</option>
	  <option value="Short Iviny">Short Iviny</option> 
	  <option value="Karla">Karla</option>
	  <option value="Polly">Polly</option>
	  <option value="Annie D">Annie D</option>
	  <option value="Farse">Farse</option>
	  <option value="Ticka">Ticka</option>
	  <option value="Azul">Azul</option>
	  <option value="Swenny">Swenny</option>
	  <option value="Lominus">Lominus</option>
	  <option value="Short Pinky">Short Pinky</option>
	  
	  
	  
	  </select>
	  <br><br>
	  <p>Cipele:</p>
	  
	  <select name="cipele" id="cipele_">
	  <option value="White Glow">White Glow</option> 
	  <option value="Portia short">Portia short</option>
	  <option value="Sosiy Epo">Sosiy Epo</option>
	  <option value="Valeny">Valeny</option>
	  <option value="Orlitta">Orlitta</option>
	  <option value="Eveny">Eveny</option>
	  <option value="Lea B">Lea B</option>
	  <option value="Rosana">Rosana</option>
	  <option value="Kasy Glam">Kasy Glam</option>
	  <option value="Stormy">Stormy</option>
	  <option value="Short Iviny">Short Iviny</option> 
	  <option value="Karla">Karla</option>
	  <option value="Polly">Polly</option>
	  <option value="Annie D">Annie D</option>
	  <option value="Farse">Farse</option>
	  <option value="Ticka">Ticka</option>
	  <option value="Azul">Azul</option>
	  <option value="Swenny">Swenny</option>
	  <option value="Lominus">Lominus</option>
	  <option value="Short Pinky">Short Pinky</option>
	  
	  
	  
	  </select>
		
		
		
		
		
		</div>
		  <div class="row">
			<h4>Unesite vaše podatke</h4>
			<div class="input-group input-group-icon">
			  <input type="text" placeholder="Ime" name="ime" id="ime"/>
			  <div class="input-icon"><i class="fa fa-user"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="text"name="prezime" id="prezime" placeholder="Prezime"/>
			  <div class="input-icon"><i class="fa fa-user"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="mail" name="email" id="email" placeholder="E-mail"/>
			  <div class="input-icon"><i class="fa fa-envelope"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="address" name="adresa" id="adresa" placeholder="Adresa"/>
			  <div class="input-icon"><i class="fa fa-map-marker"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="address"  name="grad" id="grad"  placeholder="Grad"/>
			  <div class="input-icon"><i class="fa fa-map-marker"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="address"  name="drzava" id="drzava"  placeholder="Država"/>
			  <div class="input-icon"><i class="fa fa-map-marker"></i></div>
			</div>
			<div class="input-group input-group-icon">
			  <input type="tel"  name="brojtelefona" id="brojtelefona"  placeholder="Broj telefona"/>
			  <div class="input-icon"><i class="fa fa-phone"></i></div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-half">
			  <h4>Datum rođenja</h4>
			  <div class="input-group">
				<div class="col-third">
				  <input type="text" name="dan" id="dan" placeholder="DD"/>
				</div>
				<div class="col-third">
				  <input type="text" name="mjesec" id="mjesec" placeholder="MM"/>
				</div>
				<div class="col-third">
				  <input type="text" name="godina" id="godina" placeholder="YYYY"/>
				</div>
			  </div>
			</div>
			<div class="col-half">
			  <h4>Spol</h4>
			  <div class="input-group">
				<input id="gender-male" type="radio" name="gender" value="male"/>
				<label for="gender-male">Muški</label>
				<input id="gender-female" type="radio" name="gender" value="female"/>
				<label for="gender-female">Ženski</label>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<h4>Plaćanje</h4>
			<div class="input-group">
			  <input id="payment-method-card" type="radio" name="paymentmethod" value="card" checked="true"/>
			  <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Kreditna kartica</span></label>
			  <input id="payment-method-paypal" type="radio" name="paymentmethod" value="paypal"/>
			  <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
			</div>
			<div class="input-group input-group-icon">
			  <input type="text"name="brojkartice" id="broj_kartice"placeholder="Broj kartice"/>
			  <div class="input-icon"><i class="fa fa-credit-card"></i></div>
			</div>
			<div class="col-half">
			  <div class="input-group input-group-icon">
				<input type="text" placeholder="CVC kartice"/>
				<div class="input-icon"><i class="fa fa-user"></i></div>
			  </div>
			</div>
			<div class="col-half">
			  <div class="input-group">
				<select name="cvc" id="cvc">
				  <option>01 </option>
				  <option>02 </option>
				  <option>03 </option>
				  <option>04 </option>
				  <option>05 </option>
				  <option>06 </option>
				  <option>07 </option>
				  <option>08 </option>
				  <option>09 </option>
				  <option>10 </option>
				   <option>11 </option>
				  <option>12 </option>
				  <option>13 </option>
				  <option>14 </option>
				  <option>15 </option>
				  <option>16 </option>
				  <option>17 </option>
				  <option>18 </option>
				  <option>19 </option>
				  <option>20 </option>
				   <option>21 </option>
				  <option>22 </option>
				  <option>23 </option>
				  <option>24 </option>
				  <option>25 </option>
				  <option>26 </option>
				  <option>27 </option>
				  <option>28 </option>
				  <option>29 </option>
				  <option>30 </option>
				  <option>31 </option>
				  
				</select>
				<select name="cvc" id="cvc">
				  <option>Jan</option>
				  <option>Feb</option>
				  <option>Mart</option>
				  <option>April</option>
				  <option>Maj</option>
				  <option>Juni</option>
				  <option>Juli</option>
				   <option>Aug</option>
				  <option>Sept</option>
				  <option>Okt</option>
				  <option>Nov</option>
					 <option>Dec</option>
	  
				</select>
				 <select name="cvc" id="cvc">
			  <option>2022</option>
				  <option>2023</option>
				  <option>2024</option>
				  <option>2025</option>
				  <option>2026</option>
				  <option>2027</option>
				  <option>2028</option>
				  <option>2029</option>
				  <option>2030</option>
				</select>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<h4>Newsletter</h4>
			<div class="input-group">
			  <input id="terms" name="terms" type="checkbox"/>
			  <label for="terms">Želim primati newsletter na e-mail adresu o novim ponudama i aktuelnim sniženjima</label>
			</div>
		  </div>
		  <br><br>
		  <input name="submit" type="submit" value="Naruči" id="submit">
		</form>
	  </div>
		  
		</div>
	  
	  </div>
	  
	  
	   <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
  <script>
	  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("linkshop");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
	 
	  
	  
	  </script>
	   <SCRIPT language="javascript">
    
    function zumiraj(i){
    if (i == 1) { /* povećanje slike */
    document.slikal.width = document.slikal.width* 1.20;
    document.slikal .height = document.slikal .height * 1.20;
    }
    else { /* smanjenje slike */
    if (document.slikal.width >30 && document.slikal.height > 30) {
    document.slikal.width = document.slikal.width * 0.80;
    document.slikal.height = document.slikal.height * 0.80;
    }
    }
    }
    </SCRIPT>
	
	  

    </body>
</html>