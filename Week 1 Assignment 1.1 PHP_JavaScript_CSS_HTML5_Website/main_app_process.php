<?php
    // see if a form was posted to this page
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // if true then the form will be processed on whatever is needed
        echo "name: " . $_POST["txtName"];
   }
?>