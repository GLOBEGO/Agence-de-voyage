<?php
include "../reserve/reservation_vol.php";
if(isset($_POST['eco'])){
  $dest = 'tokyo';
  economique("$dest");
}
if(isset($_POST['aff'])){
  $dest = 'tokyo';
  affaires("$dest");
}
if(isset($_POST['pre'])){
  $dest = 'tokyo';
  premiere("$dest");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GLOBEGO</title>
        <link rel="stylesheet" href="la.css">
        <link href="https://fonts.googleleapis.com/css?family=Karla" rel="stylesheet">
        <script src="javaR.js"></script>


        <meta name="viewport" content="width=device-width, initial-scale=1">



    </head>
<body>
    
    <header>
        <div class="logo">
            <a href="homeL.html"> <span>GLOBE</span> GO</a>
        </div>
        <ul class="menu">
            <li><a href="home.html">Acceuil</a></li>
            <li><a href="#a-propos">à propos</a></li>
            <li><a href="#popular-destination">destinations</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>


        <div class="responsive-menu"></div>
    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/tokyo1.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/tokyo2.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/tokyo3.jpg" style="width:100%">
          
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        <h2>Planifiez votre voyage</br>
        <h1>Tokyo</h1>
        <p>Avec ses gratte-ciel futuristes, sa scène gastronomique inégalée et sa vie nocturne sauvage, Tokyo est une véritable montée d’adrénaline.<span id="dots">...</span><span id="more">La ville est réputée pour être à la fine pointe de la technologie, mais ses anciens temples bouddhistes, ses maisons de thé anciennes et ses jardins paisibles offrent une évasion sereine et rappellent son passé. Passez la matinée à Asakusa, le quartier historique de Tokyo, pour voir le temple Sensoji, puis promenez-vous le long de la rivière Sumida (au printemps, les cerisiers en fleurs sont en pleine force). Vous pouvez également vous rendre au marché extérieur de Tsukiji pour un petit-déjeuner de sushis. Les couloirs étroits regorgent de choix d’endroits (la plupart sont fermés vers midi, alors rendez-vous tôt). Montez le volume – et goûtez à la culture cosplay – à Harajuku, ou rendez-vous à Akihabara pour les jeux vidéo et les anime. Le soir, faites un détour par un yokocho — une petite ruelle latérale — pour trouver des izakayas décontractés et des bars de détente, ce qui ne fait qu’effleurer la surface.</span></p>

        <button onclick="myFunction()" id="myBtn">Read more</button> 
        
        
 

        
        
        
        <h3>Vol</h3>
       
        
 

        
        
        
        <div class="row">
          <div class="column" style="background-color:#aaa;">
            <img src="images/eco.jpg" alt="Snow" style="width:100%">
          </div>
          <div class="column" style="background-color:#aaa;">
            <img src="images/bus.jpg" alt="Forest" style="width:100%">
          </div>
          <div class="column" style="background-color:#aaa;">
            <img src="images/first.jpg" alt="Mountains" style="width:100%">
          </div>
        </div> 
        
        
        <div class="row">
          <div class="columns4">
            <ul class="price">
              <form action="#" method="post">
              <li class="header">Classe economique</li>
              <li class="grey">
              <label for="date">Please enter a date:</label><br>
              <input type="date" id="date" name="date" min="2024-04-27"><br> 
            </li>
            <label name="dest" value="moscow"></label>
              <li> <label for="label5">Choisissez une option:</label>
                <select name="label5" id="label5" >
                  <option value="">--Sélectionnez une option--</option>
                  <option value="turkish airline">turkish airline</option>
                  <option value="qatar airline">qatar airline</option>
                  <option value="emirate airline">emirate airline</option>
                </select></li>
                <li><label for="labelM">Prix vol:</label>
                  <select name="labelM" id="labelM"></select></li>
                    <li><label for="multiplier2">Nombre de passager: </label>
                      <select id="multiplier2" name="multiplier2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                      <button onclick="multiply2()" type="button">Confirmer</button></li>
                    
                      <li><label for="pls2">Prix final</label>
                        <input type="text" id="pls2" name="pls2"> <input type="submit" name="eco" value="Reserver"> </li>  
                      </form>
            </ul>
           
          
          </div>
        <div class="columns4">
          <ul class="price">
          <form action="#" method="post">
            <li class="header">Classe affaires</li>
            <li class="grey">
              <label for="date">Please enter a date:</label><br> 
              <input type="date" id="date" name="date" min="2024-04-27"><br> </li>
            <li> <label for="label4">Choisissez une option:</label>
              <select name="label4" id="label4" >
                <option value="">--Sélectionnez une option--</option>
                <option value="turkish airline">turkish airline</option>
                <option value="qatar airline">qatar airline</option>
                <option value="emirate airline">emirate airline</option>
              </select></li>
              
            
                
              <li><label for="labelP">Prix vol:</label>
                <select name="labelP" id="labelP"></select></li>
                  
                  <li><label for="multiplier">Nombre de passager: </label>
                    <select id="multiplier" name="multiplier" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select><button onclick="multiply()" type="button">Confirmer</button></li>
                  
                    <li><label for="pls">Prix final</label>
                      <input type="text" id="pls" name="pls"> <input type="submit" name="aff" value="Reserver"> </li>    
            
                
          </ul>
         
        
  
  
        </div>
       
        <div class="columns4">
          <ul class="price">
          <form action="#" method="post">
            <li class="header">Première classe</li>
            <li class="grey">
              <label for="date">Please enter a date:</label><br>
              <input type="date" id="date" name="date" min="2024-04-27"><br> </li>
            <li> <label for="label6">Choisissez une option:</label>
              <select name="label6" id="label6" >
                <option value="">--Sélectionnez une option--</option>
                <option value="turkish airline">turkey airlines</option>
                <option value="qatar airline">qatar airlines</option>
                <option value="emirate airline">emirate airlines</option>
              </select></li>
              
            
                
              <li><label for="labelN">Prix vol:</label>
                <select name="labelN" id="labelN"></select></li>
                  <li><label for="multiplier1">Nombre de passager: </label>
                    <select id="multiplier1" name="multiplier1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select><button onclick="multiply1()" type="button">Confirmer</button></li>
                  
                    <li><label for="pls1">Prix final</label>
                      <input type="text" id="pls1" name="pls1"> <input type="submit" name="pre" value="Reserver"> </li>  
            
          </ul>
         
  
  
        </div>
      
        
        
        </div>
        <hr>
        <h3>Hotel</h3>
        
        

        <div class="row">
          <div class="column" >
            <img src="images/3s.jpg" alt="Snow" style="width:100%">
          </div>
          <div class="column" >
            <img src="images/4s.jpg" alt="Forest" style="width:100%">
            
          </div>
          <div class="column" >
            <img src="images/5s.jpg" alt="Mountains" style="width:100%">
          </div>
        </div> 
        <div class="row">
        <div class="columns4">
          <ul class="price">
            <li class="header">3 étoiles</li>
            
            <li class="grey"> <label for="firstSelect">Choisissez une option:</label>
              <select name="firstSelect" id="firstSelect" onchange="updateOptions(this.value)">
                <option value="">--Sélectionnez une option--</option>
                <option value="a">Renaissance Hotels</option>
                <option value="b">DeadFly Hotel</option>
                <option value="c">The Huntington Hotel</option>
              </select></li>
              
            
                
              <li><label for="secondSelect">Prix (par jour):</label>
                <select name="secondSelect" id="secondSelect"></select></li>
                  <li><label for="multiplier4">Nombre de personnes: </label>
                    <select id="multiplier4" >
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select><button onclick="multiply4()" type="button">Confirmer</button></li>
                  
                    <li><label for="pls8">Prix</label>
                      <input type="text" id="pls8" name="pls8">  </li> 
                      <li><label for="dtt">Durée: </label>
                        <select id="dtt" >
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          
                        </select><button onclick="multiply7()" type="button">Confirmer</button></li>
                        <li><label for="dtt2">Prix final</label>
                          <input type="text" id="dtt2" name="dtt2">
                          <input type="submit" value="Reserver">
                       

          </ul>
         
        
        </div>
      <div class="columns4">
        <ul class="price">
          <li class="header">4 étoiles</li>
          
          <li class="grey"> <label for="label2">Choisissez une option:</label>
            <select name="label2" id="label2" >
              <option value="">--Sélectionnez une option--</option>
              <option value="d">Evergreen Hotel</option>
              <option value="e">Knights Inn</option>
              <option value="f">Ace Hotel</option>
            </select></li>
            
          
              
             
            <li><label for="labelY">Prix (par jour):</label>
              <select name="labelY" id="labelY"></select></li>
                <li><label for="multiplier5">Nombre de personnes: </label>
                  <select id="multiplier5" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select><button onclick="multiply5()" type="button">Confirmer</button></li>
                
                  <li><label for="pls5">Prix </label>
                    <input type="text" id="pls5" name="pls5">  </li>  
                    
                      <li><label for="dtt3">Durée: </label>
                        <select id="dtt3" >
                          <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                          
                        </select><button onclick="multiply8()" type="button">Confirmer</button></li>
                        <li><label for="dtt4">Prix final</label>
                          <input type="text" id="dtt4" name="dtt4">
                          <input type="submit" value="Reserver">
  </ul>
        
       
     


      </div>
     
      <div class="columns4">
        <ul class="price">
          <li class="header">5 étoiles</li>
          
          <li class="grey"> <label for="label3">Choisissez une option:</label>
            <select name="label3" id="label3" >
              <option value="">--Sélectionnez une option--</option>
              <option value="h">Bourbon Bliss</option>
              <option value="i">Walkabout Beach</option>
              <option value="g">The Boulevard Motel</option>
            </select></li>
            
          
              
            <li><label for="labelZ">Prix (par jour):</label>
              <select name="labelZ" id="labelZ"></select></li>
                <li><label for="multiplier6">Nombre de personnes: </label>
                  <select id="multiplier6" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select><button onclick="multiply6()" type="button">Confirmer</button></li>
                
                  <li><label for="pls6">Prix </label>
                    <input type="text" id="pls6" name="pls6">  </li>  
                    <li><label for="dtt5">Durée: </label>
                      <select id="dtt5" >
                        <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                        
                      </select><button onclick="multiply9()" type="button">Confirmer</button></li>
                      <li><label for="dtt5">Prix final</label>
                        <input type="text" id="dtt6" name="dtt6">
                        <input type="submit" value="Reserver">
        </ul>
       
      


      </div>
    
      
      
      </div>
        
        
        
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
} 
function updateOptions(selectedOption) {
  var values = {
    'a': 150,
    'b': 200,
    'c': 199
  };
  var secondSelect = document.getElementById('secondSelect');
  secondSelect.innerHTML = ''; 
  if (values[selectedOption]) {
    var option = document.createElement('option');
    option.value = values[selectedOption];
    option.text = values[selectedOption];
    secondSelect.appendChild(option);
  }
}
document.getElementById('label2').addEventListener('change', function() {
    var value = this.value;
    var labelZ = document.getElementById('labelY');
    if (value === 'd') labelY.innerHTML = '<option value="450">450</option>';
    else if (value === 'e') labelY.innerHTML = '<option value="270">270</option>';
    else if (value === 'f') labelY.innerHTML = '<option value="359">359</option>';
  });
document.getElementById('label3').addEventListener('change', function() {
    var value = this.value;
    var labelZ = document.getElementById('labelZ');
    if (value === 'g') labelZ.innerHTML = '<option value="750">750</option>';
    else if (value === 'h') labelZ.innerHTML = '<option value="670">670</option>';
    else if (value === 'i') labelZ.innerHTML = '<option value="800">800</option>';
  });
  window.onload = function() {document.getElementById('label4').addEventListener('change', function() {
    var value = this.value;
    var labelY = document.getElementById('labelP');
    if (value === 'turkish airline') labelP.innerHTML = '<option value="2040">2040</option>';
    else if (value === 'qatar airline') labelP.innerHTML = '<option value="1900">1900</option>';
    else if (value === 'emirate airline') labelP.innerHTML = '<option value="2100">2100</option>';
  });
}
document.getElementById('label5').addEventListener('change', function() {
    var value = this.value;
    var labelZ = document.getElementById('labelM');
    if (value === 'turkish airline') labelM.innerHTML = '<option value="1250">1250</option>';
    else if (value === 'qatar airline') labelM.innerHTML = '<option value="1170">1170</option>';
    else if (value === 'emirate airline') labelM.innerHTML = '<option value="1359">1359</option>';
  });
  document.getElementById('label6').addEventListener('change', function() {
    var value = this.value;
    var labelZ = document.getElementById('labelN');
    if (value === 'turkish airline') labelN.innerHTML = '<option value="3400">3400</option>';
    else if (value === 'qatar airline') labelN.innerHTML = '<option value="3600">3600</option>';
    else if (value === 'emirate airline') labelN.innerHTML = '<option value="4000">4000</option>';
  });
  function multiply() {
    var number = document.getElementById("labelP").value;
  var multiplier = document.getElementById("multiplier").value;
  var result = number * multiplier;
  document.getElementById("pls").value = result;
}
function multiply1() {
    var number = document.getElementById("labelN").value;
  var multiplier = document.getElementById("multiplier1").value;
  var result = number * multiplier;
  document.getElementById("pls1").value = result;
}
function multiply2() {
    var number = document.getElementById("labelM").value;
  var multiplier = document.getElementById("multiplier2").value;
  var result = number * multiplier;
  document.getElementById("pls2").value = result;
}
function multiply4() {
    var number = document.getElementById("secondSelect").value;
  var multiplier = document.getElementById("multiplier4").value;
  var result = number * multiplier;
  document.getElementById("pls8").value = result;
}
function multiply5() {
    var number = document.getElementById("labelY").value;
  var multiplier = document.getElementById("multiplier5").value;
  var result = number * multiplier;
  document.getElementById("pls5").value = result;
}
function multiply6() {
    var number = document.getElementById("labelZ").value;
  var multiplier = document.getElementById("multiplier6").value;
  var result = number * multiplier;
  document.getElementById("pls6").value = result;
}
function multiply7() {
    var number = document.getElementById("pls8").value;
  var multiplier = document.getElementById("dtt").value;
  var result = number * multiplier;
  document.getElementById("dtt2").value = result;
}
function multiply8() {
    var number = document.getElementById("pls5").value;
  var multiplier = document.getElementById("dtt3").value;
  var result = number * multiplier;
  document.getElementById("dtt4").value = result;
}
function multiply9() {
    var number = document.getElementById("pls6").value;
  var multiplier = document.getElementById("dtt5").value;
  var result = number * multiplier;
  document.getElementById("dtt6").value = result;
}
            </script>
</body>
</html>
