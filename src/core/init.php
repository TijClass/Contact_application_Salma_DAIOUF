<?php 
 //1-conecte for data base 
    $connect = mysqli_connect("localhost", "root", "", "contact_application_SALMA_DAIOUF");
    if(mysqli_connect_error()){
    die("error:". mysqli_connect_error());
}
?>