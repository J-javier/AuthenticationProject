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
       $inscripcion = new validation();
       $inscripcion->registrar($data);
    }

    public function login($data)
    {
         $login = new validation();
         $login->login($data);
    }
}

?>