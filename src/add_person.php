<?php
include "./connect_bd.php";

if(isset($_POST["add"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $phone = $_POST['phone'];
    $group = $_POST['user-recommend'];
    $notes = $_POST['message'];


    if($firstname != "" && $lastname != "" && $email != "" && $adresse != "" && $phone != "" && $group != "" && $notes != ""  ){
        $sql = "INSERT INTO contacts (`first_name`, `last_name`, `email`, `address1`, `phone`, `group`, `notes`)
        VALUES ('$firstname', '$lastname', '$email' , '$adresse' , '$phone' , '$group' , '$notes')";

        if (mysqli_query($conn, $sql)) {
            $_POST["id"]= mysqli_insert_id($conn);
            header('Location: ./logout.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    else{
        echo(0);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/add_person.css">
    <title>Contact</title>
</head>
<body>
<div id="mod" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
        <div class="" >
        
            </div>
        
        </div>

    </div>
    <form id="form" action="" method="post">
                    <label for="name" id="name-label" class="uno"> first Name</label>
                    <input type="text" id="name" placeholder="Enter your first Name" name="firstname" requiered>
                    <label for="name" id="name-label" class="uno">last Name</label>
                    <input type="text" id="name" placeholder="Enter your last Name" name="lastname" requiered>
                    <label for="email" id="email-label" class="uno">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email" name="email" requiered>
                    <label for="adress" id="name-label" class="uno">Adress</label>
                    <input type="text" id="name" placeholder="Enter your Adress"name="adresse" requiered>
                    <label for="name" id="name-label" class="uno">Phone</label>
                    <input type="text" id="name" placeholder="Enter your Phone" name="phone" requiered>
                    <div class="bot">
                        <input type="radio" name="user-recommend" value="definitely" class="input" checked>
                        <label for="btn" id="btn-label" class="uno">family</label>
                        <input type="radio" name="user-recommend" value="maybe" class="input">
                        <label for="btn" id="btn-label" class="uno">friend</label>
                        <input type="radio" name="user-recommend" value="not-sure" class="input">
                        <label for="btn" id="btn-label" class="uno">Businness</label>
                    </div>
                    <label for="name" id="name-label" class="unoo">notes</label>
                    <textarea id="message" class="textarea uno" name="message" placeholder="Enter your message here..."></textarea>

                    <div class="w3-container">
        
                    <button type="submit" name="add" class="button">Submit</button>
                    </div>
                    </div>
        
        </div>

    </div>
                    
                </form>
</body>
</html>

