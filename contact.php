<!DOCTYPE HTML>

<html>


<head>
  <title>Master 2, Droit du Numérique - Caen</title>
  <link rel='stylesheet' type='text/css' href='style/style.css'/>
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href="https://www.w3schools.com/w3css/3/w3.css"
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <meta name='viewport' content="device-width, initial-scale=1">
</head>


<body>
    <div class="header">
    </div>
  <nav>
    <div class="topnavT w3-content">
      <a href="index.php">ACCUEIL</a>
      <a href="">PROMOTIONS</a>
      <a href="">INTERVENANTS</a>
      <a href="">ACTIVITES</a>
      <a href="contact.php">CONTACTS</a>
      <a href="">LE MASTER</a>
    </div>
  </nav>
  <br>
  <div class="container">
  <form action="/action_page.php">

    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre Prénom...">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre Nom...">


    <label for="subject">Sujet</label>
    <textarea id="subject" name="subject" placeholder="..." style="height:200px"></textarea>

    <input type="submit" value="Envoyer">

  </form>
</div>
</body>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
    Powered by <a href="http://google.fr/" target="_blank">Pierre Fortin</a>
  </p>
</footer>



</html>
