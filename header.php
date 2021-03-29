<?php
session_start();
?>

    <div class="navbar">
        <div class="logotipo" href='index.php'>
        <img src="imgs/logo.png" alt="logo" class="logo">
        <a href="index.php" ><p class='loginsys'>ROKKAT</p></a>
        </div>
        <div class="menu">
        <a id="pg1" href="index.php" class="txt">
        Main</a>
        <?php
            if (isset($_SESSION['useruid'])) {
                echo '
                <a class="txt" href="profile.php">Profile</a>';
                echo '
                <a class="alterbtn" href="includes/logout.inc.php">Log Out</a>';
            }
            else {
               echo '<a class="txt" href="login.php">Login</a>';
               echo '<a class="alterbtn" href="signup.php">Sign Up</a>';
            }
        ?>
        </div>
    <br>

    </div>
