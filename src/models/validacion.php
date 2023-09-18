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
        $foto=$data["fotoperfil"];

        $hash = password_hash($contrasena , PASSWORD_DEFAULT);

        $type = substr($_FILES["image"]["type"], 0,5 );
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
            $tmp_location = $_FILES["fotoperfil"]["tmp_name"]; // Usar tmp_name para obtener la ubicación temporal
            $fn_location_db = "/src/db/db_images/" . $_FILES["fotoperfil"]["name"];
            $fn_location = $_SERVER["DOCUMENT_ROOT"] . $fn_location_db;
    
            if (move_uploaded_file($tmp_location, $fn_location)) {
                $consulta = "INSERT INTO user (user_name, email, user_password, phone_number, biography, url_photo) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $databaseinf->connect()->prepare($consulta);
                $stmt->execute([$nombre, $correo, $hash, $telefono, $biografia, $fn_location_db]);
    
                header("Location: /src/views/profile/profile.php");
            }
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
        // Prepara la consulta
        $stmt = $informacion->connect()->prepare($consulta);
        $stmt->bindParam(':correo', $correo);
        // Ejecuta la consulta
        $stmt->execute();
        // Obtiene el resultado como un arreglo asociativo
        $detalle = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($detalle) {
            session_start();
            $_SESSION["correo_usuario"]=$correo;
            $_SESSION["contrasena_usuario"]=$contrasena;
            header("Location: /src/views/profile/profile.php");
        }else {
            session_start();
            $_SESSION["mensaje_error_login"] = "El usuario y contraseña no existen, porfavor ingrese a la opcion Register";
            header("Location: /src/views/login/login.php");
        }
        $informacion->disconnect();
    }
}
?>