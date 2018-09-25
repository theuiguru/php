<?php
  $existingNames = array("Chris", "Dennis", "Danny", "Jane");

  if(isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];

    if(!empty($name)) {
      foreach($existingNames as $existingName) {
        if(strpos($existingName, $name) !== false) {
          echo $existingName;
          echo "<br>";
        }
      }
    }
  }
?>