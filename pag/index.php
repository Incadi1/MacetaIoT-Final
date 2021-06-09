<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Macetas -Incadi</title>
</head>

<body>
    
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>IC</b> Incadi</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#inicio" class="w3-bar-item w3-button">INICIO</a>
      <a href="#sensores" class="w3-bar-item w3-button">SENSORES</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="fondo.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Maceta IoT</b></span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">


  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="sensores">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">SENSORES</h3>
    <p>Seleccione uno de los siguientes sensores para dirigirse...
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>Sensor 1</h3>
      <p class="w3-opacity">humedad proteus</p>
      <p>este es algo</p>

      <p><form action="index.php" method="post">
        INGRESAR <input type="text" name="ingresar"><br>
        <input type="submit" name="enviar" value="ENVIAR">
      </form></p>
    </div>
   
  </div>



<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Realizado Por Ingrid Carmona Diaz de <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
   
 
   
</body>
</html>


