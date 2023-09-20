<?php

if(isset($_SESSION['hashed_user']))
{
    unset($_SESSION['hashed_user']);
}

header("Location: index.php");
die;

?>


<!-- This code is referenced from Quick programming (Youtube) -->
