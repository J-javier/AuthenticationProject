<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/src/controller/main_controller.php" );

$firstView = new user();

$firstView->index();


?>