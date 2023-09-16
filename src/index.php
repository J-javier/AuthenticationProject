<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/src/controller/main_controller.php" );
$firstView = new user();

if($_SERVER["REQUEST_METHOD"] === "POST" ){
    if(isset($_POST["register"])){
        $firstView->preinscripcion($_POST);
    }
    if (isset($_POST["save"])) {
        $firstView->inscripcion($_POST);
    } 


}else {
    $firstView->index();
}



?>