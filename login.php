<?php
    if(isset($_POST["submit"])) {
        // echo "fratm";

        $user = $_POST["username"];
        $password = $_POST["password"];

        $conn = mysqli_connect("localhost",
        "root", //username
        "root", //password
        "chapterfour"); //dbname

        if($conn) {
            echo "Database connesso";
        } else {
            die("Connessione fallita");
        }


        

        mysqli_close($conn);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter Four</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Randy is here</h1>

    <div class="container">

        <h2 class="bg-success">Login</h2>
            <div class="col-sm-6">
            
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control">

                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control">

                    </div>
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </form>
            </div>
    
    </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>