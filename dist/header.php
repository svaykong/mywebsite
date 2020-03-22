<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <!-- Fontawesome Icon -->
    <script src="https://kit.fontawesome.com/2006ec4d0a.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/cool-icon.png">
    <title>PHP | Login System For Beginner</title>
</head>
<body>
    
    <header>
        <nav>
            <a href="#">
                <img src="./images/logo.jpg" width="80px" height="72px" alt="MyLogo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <?php
                    if (isset($_SESSION['userId'])) 
                    {
                        echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit">Logout</button>
                              </form>';
                    }
                    else 
                    {
                        echo '<form action="includes/login.inc.php" method="post">
                                <input type="text" name="mailuid" id="mailuid" placeholder="E-mail/Username...">
                                <input type="password" name="pwd" id="pwd" placeholder="Password...">
                                <button type="submit" name="login-submit">Login</button>
                              </form>
                              <a href="signup.php">Sign Up</a>';
                    }
                ?>
            </div>
            <div style="clear: both;"></div>
        </nav>
    </header>

</body>
</html>