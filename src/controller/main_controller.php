<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/validacion.php");

class user{
    public function index()
    {
        include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/register/register.php" );
    }

    public function preinscripcion($data)
    {
        $validacion = new validation();
        $validacion->find($data);
    }

    public function inscripcion($data)
    {
        var_dump($data);
        /* include_once($_SERVER["DOCUMENT_ROOT"] . "/src/views/profile/profile.php" ); */
    }

}

?>