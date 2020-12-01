<?php 
 $conn = mysqli_connect("localhost",
 "root", //username
 "root", //password
 "chapterfour" //dbname
); 

if($conn) {
    echo "Connessione effettuata"."<br>";
} else {
    die ("impossibile connettersi al DB");
}
  
//Show data
$users = mysqli_query(
    $conn,
    "SELECT * FROM users"
); 
 
if(!$users) {
    echo ("Error: ".mysqli_error($conn));
} 
 //Update data
if(isset($_POST["update"])) {
    $username = $_POST["username"];
    $pw = $_POST["password"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $id = $_POST["id"];


   $update = "UPDATE users SET username = '$username', password = '$pw', email = '$email', gender = '$gender' WHERE id = '$id'";

   if(mysqli_query($conn, $update)) {
       echo "I dati sono stati aggiornati";
   } else {
       echo "Dati non aggiornati";
   }
}

//Delete data
if(isset($_POST["delete"])) {
    $username = $_POST["username"];
    $pw = $_POST["password"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $id = $_POST["id"];


   $update = "DELETE FROM users WHERE username = '$username'";

   if(mysqli_query($conn, $update)) {
       echo "I dati sono stati cancellati";
   }
}

mysqli_close($conn);
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Update Users</h1>
        <div class="col-sm-6"> 
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control">

                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control">

                    <label for="email">email</label>
                    <input type="email" name="email" class="form-control">

                    <label for="gender">gender</label>
                    <input type="text" name="gender" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" class="">
                    <?php 
                       
                    ?>
                    </select>
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
        </div>          
    </div> 


    <div class="container">
        <h1>Delete Users</h1>
        <div class="col-sm-6"> 
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control">

                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control">

                    <label for="email">email</label>
                    <input type="email" name="email" class="form-control">

                    <label for="gender">gender</label>
                    <input type="text" name="gender" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" class="">
                    <?php 
                        while($usersData = mysqli_fetch_assoc($users)) {
                            $result = $usersData['id'];
                            echo "<option value='$result'>$result</option>";
                        }
                    ?>
                    </select>
                </div>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </div>          
    </div>


    <div class="container">
        <h1>Show Users</h1>
            <div class="col-sm-6">
            
                <?php 
                    while($usersData = mysqli_fetch_row($users)) {      
                ?>
                <pre>
                    <?php    
                    foreach ($usersData as $utente) {
                        echo $utente."</br>";
                    }
                    ?>
                </pre>
                <?php 
                    }
                ?> 
            
            </div>
    </div>
  


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>