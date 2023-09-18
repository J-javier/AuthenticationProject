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
        $stmt = $informacion->connect()->prepare($consulta);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
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
        $informacion->disconnect();   
    }
    
    public function registrar ($data)
    {
        $databaseinf = new database();
        $nombre=$data["nombre"];
        $biografia=$data["biografia"];
        $correo=$data["correo"];
        $contrasena=$data["contrasena"];
        $telefono=$data["telefono"];
        //$foto=$data["fotoperfil"];
        $hash = password_hash($contrasena , PASSWORD_DEFAULT);

        if (!empty($_FILES["fotoperfil"]["tmp_name"])) {
            $img_blob = addslashes(file_get_contents($_FILES["fotoperfil"]["tmp_name"]));
        } else {
            $img_blob = null; 
        }
        
        if (isset($img_blob)) {       
            $consulta = "INSERT INTO user (user_name, email, user_password, phone_number, biography, url_photo) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $databaseinf->connect()->prepare($consulta);
            $stmt->execute([$nombre, $correo, $hash, $telefono, $biografia, $img_blob]);

            header("Location: /src/views/profile/profile.php");

        } else {
            $consulta = "INSERT INTO user (user_name, email, user_password, phone_number, biography) VALUES (?, ?, ?, ?, ?)";
            $stmt = $databaseinf->connect()->prepare($consulta);
            $stmt->execute([$nombre, $correo, $hash, $telefono, $biografia]);
    
            header("Location: /src/views/profile/profile.php");
        }
        $databaseinf->disconnect();
    }

    public function login ($data)
    {
        $informacion = new database();
        $correo = $data["correo"];
        $contrasena = $data["contrasena"];
        $consulta = "SELECT * FROM user WHERE email = :correo ";
        $stmt = $informacion->connect()->prepare($consulta);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $detalle = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($contrasena);

        if ($detalle) {
            if(password_verify($contrasena, $detalle['user_password'])) {
                session_start();
                $_SESSION["correo_usuario"] = $correo;
                $_SESSION["contrasena_usuario"] = $contrasena;
                header("Location: /src/views/profile/profile.php");
                die();
            }else {
                session_start();
                $_SESSION["mensaje_error_login"] = "Contraseña incorrecta, por favor intente de nuevo.";
                header("Location: /src/views/login/login.php");
                die();
            }
        }else {
            session_start();
            $_SESSION["mensaje_error_login"] = "El usuario no existe, por favor regístrese.";
            header("Location: /src/views/login/login.php");
            die();
        }
        $informacion->disconnect();
    }

    public function obtenerDatosUsuario($correo)
    {
        $databaseinf = new database();
        
        $consulta = "SELECT * FROM user WHERE email = ?";
        $stmt = $databaseinf->connect()->prepare($consulta);
        $stmt->execute([$correo]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
?>