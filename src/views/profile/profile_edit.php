<?php
session_start();

if (!isset($_SESSION["correo_usuario"]) || !isset($_SESSION["contrasena_usuario"])) {
    header("Location: /src/views/register/register.php");
    exit(); 
}

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controller/main_controller.php" );

$userDataController = new user();
$userData = $userDataController->mostrarPerfil($_SESSION["correo_usuario"]); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="/src/scripts/main.js" defer></script>
    <link rel="stylesheet" href="/src/styles/profile/profileEdit.css">
    <title>Profile Edit Page</title>
</head>

<body class="h-screen w-screen">
    <main class="h-full w-full flex justify-center">
        <div class="w-[90%] h-full flex flex-col items-center pt-3">
            <section class="flex flex-row justify-between w-full">
                <div class="flex justify-start items-center gap-2 ">
                    <img src="/src/images/devchallenges.svg" alt="img">
                </div>

                <div class="dropdown">
                    <div class="flex flex-row items-center w-50">
                        <div class="h-[1.5rem] w-[1.5rem]">
                        <?php
                            if(isset($userData["url_photo"])){
                                $dataImg= base64_encode($userData["url_photo"]);
                                echo "<img src='data:image/jpeg;base64,$dataImg' alt='' />";
                            }
                                echo "<img src='/src/images/blank_photo.jpg' />";
                            ?>
                        </div>
                        <button id="dropdownBtn" class="dropdown-button font-semibold ">Profile User<span class="arrow">&#9660;</span></button>
                    </div>
                    <div id="dropdownContent" class="dropdown-content">
                        <a href="/src/views/profile/profile.php"><div class="flex pvisual"><img src="/src/images/account.svg" alt="img" class="pr-2 ">My Profile</div></a>
                        <a href="#" class="border-b-2 "><div class="flex pvisual"><img src="/src/images/group.svg" alt="group" class="pr-2">Group Chat</div></a>
                        <a href="/src/views/Logout/logout.php" class=""><div class="flex text-[#EB5757] pvisual"><img src="/src/images/arrow.svg" alt="img" class="pr-3 ">Logout</div></a>
                    </div>
                </div>
            </section>
            <section class="w-full h-full flex flex-col justify-center items-center">
                <div class="flex justify-start w-1/2 pb-3">
                    <a href="/src/views/profile/profile.php" class="text-blue-500 "><span>&lt;</span> Back</a>
                </div>
                <div class="border rounded-md w-[55%] h-auto shadow-md border-gray-300">
                    <div class="pl-8 py-5 ">
                        <h1 class="font-semibold text-[1.5rem]">Change Info</h1>
                        <p class="text-[#828282]">Changes will be reflected to every services</p>
                    </div>
                    <div class="pl-8">
                        <form action="/src/index.php" method="post" enctype="multipart/form-data">
                            
                            <div class="flex items-center"> 
                                <div class="h-14 w-14 rounded-md border border-gray-300 flex justify-center items-center">
                                <?php
                                    if(isset($userData["url_photo"])){
                                        $dataImg= base64_encode($userData["url_photo"]);
                                        echo "<img src='data:image/jpeg;base64,$dataImg' alt='' />";
                                    }
                                        echo "<img src='/src/images/blank_photo.jpg' />";
                                ?>
                                    <input type="file" class=" top-0 right-0 left-0 bottom-0 custom-input" id="fotoperfil" name="fotoperfil" hidden>
                                </div>
                                <label for="fotoperfil" class="pl-3 font-light text-[#828282]" >CHANGE PHOTO</label>
                            </div>
                            
                            <label for="nombre" class="text-sm ">Name</label><br>
                            <input type="text" name="nombre" id="nombre" placeholder="Enter your name..." required
                            class="h-11 w-2/4 pl-1 border border-gray-500 rounded-md  mb-1" value="<?= $userData["user_name"] ?>"><br>

                            <label for="biografia" class="text-sm ">Bio</label><br>
                            <input type="text" name="biografia" id="biografia" placeholder="Enter your bio..." required
                            class="h-20  w-2/4 pl-1 border border-gray-500 rounded-md mb-1" value="<?= $userData["biography"] ?>"><br>

                            <label for="telefono" class="text-sm ">Phone</label><br>
                            <input type="text" name="telefono" id="telefono" placeholder="Enter your phone number..." required
                            class="h-11 w-2/4 pl-1 border border-gray-500 rounded-md  mb-1" value="<?= $userData["phone_number"] ?>"><br>

                            <label for="correo" class="text-sm ">Email</label><br>
                            <input type="text" name="correo" id="correo" placeholder="Enter your email..." required
                            class="h-11 w-2/4 border pl-1 border-gray-500 rounded-md  mb-1" value="<?= $userData["email"] ?>"><br>

                            <label for="contrasena" class="text-sm ">Password</label><br>
                            <input type="password" name="contrasena" id="contrasena" placeholder="Enter your password..." required
                            class="h-11 w-2/4 pl-1 border border-gray-500 rounded-md  mb-3" ><br>
                            
                            <input type="text" value="<?= $userData["id_user"] ?>" name="id" hidden>
                            <div class="pb-2 ">
                                <button class="py-2 px-6 bg-blue-500 text-white rounded-md" name="update">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section> 
        </div>
    </main>
</body>

</html> 