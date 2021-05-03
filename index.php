


<!DOCTYPE html>
<html>
<!--2021 Kristian Töllikkö, Lämpötilanmuunnin 0.1-->
<head>
<title>Lomake</title>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/animate.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,700;1,800&display=swap" rel="stylesheet">

<meta charset="utf-8">

</head>

<body>
    
<br><br><br>
     

<section Lomake>
  <div class="container wow pulse">
    <div class="teksti">
      <p class="kav-teksti">Lomake</p>
      <hr>
      <div class="js-boksi">
        <form name="myform" method="post" onsubmit="return validateform()" >  
          Käyttäjätunnus: <input type="text" name="loginid">
          Salasana: <input type="password" name="salasana">
          Nimi: <input type="text" name="nimi">  
          Osoite: <input type="text" name="osoite">  
          Postinumero: <input type="text" maxlength="5" name="postinumero"> 
          Kieli: 
          <select name="kieli" id="kieli">
            <option value="Valitse kieli">Valitse kieli</option>
            <option value="kieli">Suomi</option>
            <option value="kieli">Muu kieli</option>
          </select> <br><br>
          Sähköposti: <input type="text" name="email"> 

          Maa: 
          <select name="maa" id="maa">
            <option value="Valitse maa">Valitse maa</option>
            <option value="maa">Suomi</option>
            <option value="maa">Muu maa</option>
          </select>
          <br>
          <br>
          <div>
            <input type="radio" id="Mies" name="spuoli" value="Mies">
            <label for="Mies">Mies</label>
          </div>
          <div>
            <input type="radio" id="Nainen" name="spuoli" value="Nainen">
            <label for="Nainen">Nainen</label>
          </div>
          Lisätietoja: <textarea id="text" name="listietoa" rows="4" cols="50"></textarea>
          <button type="button" onclick="validateform()" class="Btn">Muunna</button>
        </form>
      </div>
    </div>
  </div>

</section Lomake> 
      


</body>

<script src="js/lomake.js"></script>

<!-- Koska työ on julkinen, latasin nopeasti "WOW" animaation-->
<script src="js/wow.min.js"></script>
<script> new WOW().init(); 
// Jälkimmäinen päivättää sivun == 2 on arvo selaimessa joka tunnistaa palaavan käyttäjän
if(performance.navigation.type == 2){ location.reload(true);}</script>


</html>


