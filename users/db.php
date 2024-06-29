<?php

    $con = mysqli_connect("localhost","zerrohos_trybecofeeshop","3Bigsharks$","zerrohos_trybecoffeeshop");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>