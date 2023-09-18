<?php

session_start();

session_destroy();

header("Location: /src/views/register/register.php")
?>