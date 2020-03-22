<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <?php
                    if (isset($_GET['error']))
                    {
                        if ($_GET['error'] == "emptyfields")
                        {
                            echo '<p class="signuperror">Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invaliduidmail")
                        {
                            echo '<p class="signuperror">Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invaliduid")
                        {
                            echo '<p class="signuperror">Invalid username!</p>';
                        }
                        else if ($_GET['error'] == "invalidmail")
                        {
                            echo '<p class="signuperror">Invalid e-mail!</p>';
                        }
                        else if ($_GET['error'] == "passwordcheck")
                        {
                            echo '<p class="signuperror">Your passwords do not match!</p>';
                        }
                        else if ($_GET['error'] == "usertaken")
                        {
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }
                    }
                    else if (isset($_GET['signup']) == "success")
                    {
                        echo '<p class="signupsuccess">Signup successful!</p>';
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" id="uid" placeholder="Username">
                    <input type="email" name="mail" id="mail" placeholder="E-mail">
                    <input type="password" name="pwd" id="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" id="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>

                <!-- Here we create the form which starts the password recovery process! -->
                <a href="reset-password.php">Forget your password?</a>

            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>