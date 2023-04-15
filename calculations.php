<?php

  //initializing variables & constant
  $temperature = floatval($_POST["temp-entered"]);
  define ("TEMP_LIMIT", 15);
  $message = "";

  //if/then statement: if temperature is greater or equal to 15 degrees
  if ($temperature >= TEMP_LIMIT) {
    $message = "This temperature would be considered hot. Prepare yourself for warmer weather!";
  }
    
  //else represents a temperature less than 15 degrees
  else {
    $message = "This temperature would be considered cold. Prepare yourself for cooler weather!.";
  }
  //displaying the correct message to the screen
  echo "$message";
?>