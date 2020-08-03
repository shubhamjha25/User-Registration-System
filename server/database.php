<?php
    $con = mysqli_connect("localhost","root","","LoginSystem");
    // Check Whether Conneting To Database is Successfull or Not 
    if (mysqli_connect_errno()){
        echo "Failed To Connect To The Database !" . mysqli_connect_error();
    }
?>
