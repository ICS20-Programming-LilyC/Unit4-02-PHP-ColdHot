<html lang="en-ca">
 <head>
   
   <!--Meta data-->
   <meta charset="utf-8">
   <meta name="description" content="Temperature Website PHP Webpage">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="Lily C">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Code for the favicon-->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
   <link rel="manifest" href="./fav_index/android-chrome-512x512.png">

   <!--CSS stylesheet-->
   <link rel="stylesheet" href="./css/style.css">

   <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-pink.min.css" /> 

   <!--Padding-->
   <main style="padding-left: 20px; padding-right: 20px;">

   <!--Title-->
   <title>Temperature Webpage in PHP</title>
  </head>
  <body>

   <!--Header-->
   <?php echo "<h1>Temperature Website with PHP</h1>"; ?>

   <!--Image-->
    <center>
   <img src="./images/hotAndCold.png" alt="Examples of hot and cold person" width="400" length="400">
    </center>

   <!--Div-->
   <div>
     <?php
       echo "<p>If you're ever struggling to determine whether the temperature is cold or hot. Thankfully, this website I created will help you determine if your temperatures are considered to be hot or cold!</p>";
     ?>
    </div>

    <?php echo "<h3>Please enter your temperature below:</h3>"; ?>
    <form action="./calculations.php" method="post" target="results">
      <label for="user-input">Temperature in degrees celsius:</label>
      <input type="float" step="1" name="temp-entered" placeholder="Degrees"><br><br>
      <input type="submit" id="button" value="Evaluate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </form>

    <!--iFrame-->
    <iframe name="results" id="results"><iframe>
  </body>
</html>