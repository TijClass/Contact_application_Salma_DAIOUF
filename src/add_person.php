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
    <form id="form">
                    <label for="name" id="name-label" class="uno"> first Name</label>
                    <input type="text" id="name" placeholder="Enter your first Name" requiered>
                    <label for="name" id="name-label" class="uno">last Name</label>
                    <input type="text" id="name" placeholder="Enter your last Name" requiered>
                    <label for="email" id="email-label" class="uno">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email"  requiered>
                    <label for="adress" id="name-label" class="uno">Adress</label>
                    <input type="text" id="name" placeholder="Enter your Adress" requiered>
                    <label for="name" id="name-label" class="uno">Phone</label>
                    <input type="text" id="name" placeholder="Enter your Phone" requiered>
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
        
                    <a href="" 
                    class="button">Submit</a>
                    </div>
                    </div>
        
        </div>

    </div>
                    
                </form>