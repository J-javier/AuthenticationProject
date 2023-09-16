<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/src/db/connection.php" );


class validation
{
    public function find($data)
    {
    
        $informacion = new database();
        $correo = $data["correo"];
        $contrasena = $data["contrasena"];
        $consulta = "SELECT * FROM user WHERE email = :correo ";
        
        // Prepara la consulta
        $stmt = $informacion->connect()->prepare($consulta);
        $stmt->bindParam(':correo', $correo);
        
        // Ejecuta la consulta
        $stmt->execute();
    
        // Obtiene el resultado como un arreglo asociativo
        $detalle = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$detalle) {
            session_start();
            $_SESSION["correo_usuario"]=$correo;
            $_SESSION["contrasena_usuario"]=$contrasena;
            header("Location: /src/views/profile/profile_information.php");
        }else {
            session_start();
            $_SESSION["mensaje_error"] = "El usuario y contraseña ya existen, porfavor ingrese a la opcion Login";
            header("Location: /src/views/register/register.php");
        }
        
    }

}
?>