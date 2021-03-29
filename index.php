<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script src="script.js"></script>
    <title>Main</title>
</head>
<body>


    
    <?php
        include_once ('header.php');
    ?>
    
    <p class='title'>Main</p>
    <p>Welcome to the main page!</p>

    <?php
            if (isset($_SESSION['useruid'])) {
                echo "<br><p style='color: green;'>You're Logged in!</p><br><br>";
                echo '<p>Hello '.$_SESSION['useruid'].', Enjoy the website!</p>';
            }else{
                echo "<br><p style='color: lightblue;'>Log in to use the website!</p>";
            }











    ?>

</body>
</html>