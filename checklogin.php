<?php
if (isset($_POST["submit"])) {
    $_SESSION["students"] = array(
        "id" => $_POST["id"],
        "fname" => $_POST["fname"],
        "lname" => $_POST["lname"],
        "state" => $_POST["state"],
    );

}

if (empty($_SESSION['students']) || count($_SESSION['students'])== 0) {
  echo "There no values";
}

if(isset($_SESSION['students'])){
    //Loop through it like any other array.
   foreach($_SESSION['students'] as $productId){
        //Print out the product ID.
       echo $productId, '<br>';
    }
  }
