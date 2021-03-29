<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Profile</title>
</head>

<body>
    <?php
    include_once('header.php');
    ?>

    <p class='title'>Profile</p>

    <?php

    if (isset($_SESSION['useruid'])) {
        echo '<p>Welcome to the profile, ' . $_SESSION['useruid'] . '</p>';
    } else {
        echo "<br><p style='color: lightblue;'>Log in to use the website!</p>";
    }
    ?>

    </form>
</body>

</html>