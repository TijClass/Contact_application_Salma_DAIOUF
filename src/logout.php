<?php
  require('./connect_bd.php');
  $sql = "SELECT * FROM contacts";
  $result = mysqli_query($conn, $sql);

//   while($row = $result->fetch_assoc()) {
//     var_dump($row);
//    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/logout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <nav>
    <div class="nav">
        <img class="logo" src="./assets/img/LOGO.png" alt="logo.png">
        <div class="title"><h1>MyWebApp</h1></div>
        <div class="btn btn-secondary" >
            <a href="./login.php">LOG OUT</a>
        </div>

    </div>
    </nav>
    
    <div class="search">
        <div>
            <h3>Contact List</h3>
        </div>
        <!-- <div class="search-input"> -->
            <div class="cont">
                <div class="input">
                <input type="text" class="form-control " placeholder="Search" aria-describedby="button-addon2">
                </div>
            <div class="button">
            <button class="btn btn-secondary" type="button" id="button-addon2" x><a href="./add_person.php">Add Person</a></button>
            </div>
        <!-- </div> -->
    </div>
    
    <div class="table1">
        <table class="table table-striped">
            <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">First-Name</th>
            <th scope="col">Last-Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Adress</th>
            <th scope="col">Group</th>
            <th scope="col">Action</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
       <?php $id =0;
       while($row = $result->fetch_assoc()) {
           $id++; ?>
            <tr>
            <th scope="row"><?= $id ?></th>
            <td><?= $row['first_name'] ?></td>
            <td><?= $row['last_name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['address1'] ?></td>
            <td><?= $row['grp'] ?></td>
            <td><?= $row['notes'] ?></td>   
            <td>
				<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				<a href="./delet.php?id=<?php echo $row['id']; ?>"><i class="fas fa-times-circle"></i></a>
                
			</td>
            </tr>
            <?php  }?>
        </tbody>
        </table>
    </div>
</body>
</html>

