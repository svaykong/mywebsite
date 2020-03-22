<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Reset your password</h1>
                <p>An e-mail will be send to you with instructions on how to reset your password.</p>
                <form action="includes/reset-request.inc.php" method="post">
                    <input type="email" name="email" id="email" placeholder="Enter your e-mail address...">
                    <button type="submit" name="reset-request-submit">Receive new password by e-mail</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>