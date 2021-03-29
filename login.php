<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    
    

    <?php
        include_once ('header.php');
    ?>

    <p class='title'>Login</p>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username / email"> <br>
        <input type="password" name="pwd" placeholder="password"> <br>
        <button type="submit" name="submit">Log in
        </button>
    </form>

    <!-- Errors Check -->

    <?php
        if (isset($_GET['error'])){
            
            $res = $_GET['error'];

            if ($res == 'emptyinput'){
                echo "<br><p class='errormsg'>Fill all the fields!</p>";
            }
            else if($res == 'wronglogin'){
                echo "<br><p class='errormsg'>Invalid Login!</p>";
            }
            else if($res == 'wrongpassword'){
                echo "<br><p class='errormsg'>Invalid Password!</p>";
            }
            
        }
    ?>

</body>
</html>