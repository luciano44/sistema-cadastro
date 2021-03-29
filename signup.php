<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Sign up</title>
</head>
<body>
    


    <?php
        include_once ('header.php');  
    ?>

    <p class='title'>Sign Up</p>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="full name"> <br>
        <input type="text" name="email" placeholder="email"> <br>
        <input type="text" name="uid" placeholder="username"> <br>
        <input type="password" name="pwd" placeholder="password"> <br>
        <input type="password" name="pwdrepeat" placeholder="repeat password"> <br>
        <button type="submit" name="submit">Sign up
        </button>
    </form>


    <!-- Errors Check -->

    <?php
        if (isset($_GET['error'])){
            
            $res = $_GET['error'];

            if ($res == 'emptyinput'){
                echo "<br><p class='errormsg'>Fill all the fields!</p>";
            }
            else if($res == 'invaliduid'){
                echo "<br><p class='errormsg'>Choose a proper username!</p>";
            }
            else if($res == 'invalidemail'){
                echo "<br><p class='errormsg'>Choose a proper email!</p>";
            }
            else if($res == 'passwordsdontmatch'){
                echo "<br><p class='errormsg'>Passwords do not match!</p>";
            }
            else if($res == 'stmtfailed'){
                echo "<br><p class='errormsg'>Something went wrong, try again!</p>";
            }
            else if($res == 'usernametaken'){
                echo "<br><p class='errormsg'>Username already taken!</p>";
            }
            else if($res == 'none'){
                echo "<br><p class='successmsg'>You have signed up!</p>";
            }
        }
    ?>

</body>
</html>