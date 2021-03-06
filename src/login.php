<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
<!-- LOGIN -->
    
<div class="container-fluid mt-5 login-section">
    <div class="row">
        <div class="col-lg-4 col-md-2"></div>
        <div class="col-lg-6 col-md-8 ">
            <div class="col-lg-9 mt-5  text-center ">
               <h1 ><img class="logo" src="./assets/img/LOGO.png" alt="">WELCOME TITLE</h1>
            </div>
        </div>
    </div>
    <div class="start-login row ">
        <div class=" col-lg-1 col-md-1 mt-5"></div>

        <div class=" col-lg-4 col-md-12 mt-5">
            <h2 " >WELCOME sub_title</h2>
            
        <div class="mt-5"></div>
                    <div class="mt-5">Lorem Ipsum Dolor Sit Amet, Consectetur 
                        Adipisicing Elit, Sed Do Eiusmod Tempor 
                        Incididunt Ut Labore Et Dolore Magna Aliqua
                        Ut Enim Ad Minim Veniam, Quis Nostrud 
                        Exercitation Ullamco Laboris Nisi Utaliquip Ex
                        Ea Commodo Consequat. Duis Aute Irure Dolor In 
                        Reprehenderit In Voluptate Velit Esse Cillum Dolore
                        Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat 
                        Cupidatat Non Proident, Sunt In Culpa Qui Officia 
                        Deserunt Mollit Anim Id Est Laborum.</div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class=" btn btn-light mt-3 " data-mdb-ripple-color="dark">Read More</button>
                        </div>
        </div>



            <div class=" col-lg-1 col-md-0  mt-5 line"></div>


         <div class="col-lg-5 col-md-12 ml-5   ">
             <h2 class="mt-5">Login</h2>
             <div class="mt-5  login-informations p-5">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                    <div class=" d-flex justify-content-between mt-5 " >
                            <button name="submit" type="submit" class="btn btn-light" data-mdb-ripple-color="dark">Login</button>
                        <div>
                            <input type="checkbox" name="remember_me" id="remember_me"  class="">
                            <label class="" for="remember_me"> Remember Me!</label>
                        </div>
                    </div>
                </form>
                <div class=" col-lg-1 col-md-8 "></div>
            </div>
         </div>
    </div>

</div>
</body>
</html>