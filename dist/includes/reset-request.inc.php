<?php

if (isset($_POST['reset-request-submit']))
{

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    // change url to your own website
    $url = "www.mmtuts.net/forgottenpwd/";

}
else 
{
    header("Location: ../index.php");
}