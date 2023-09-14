<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="/src/scripts/main.js" defer></script>
    <link rel="stylesheet" href="/src/styles/profile/profileEdit.css">
    <title>Profile page</title>
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
                        <div class="h-[1.5rem] w-[1.5rem]"><img src="/src/images/blank_photo.jpg" alt="profile"></div>
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
                <h1 class="font-bold text-[1.5rem]">We almost done! </h1>
                <div class="border rounded-md w-[55%] h-[85%] shadow-md border-gray-300">
                    <div class="pl-8 py-5 ">
                        <h1 class="font-semibold text-[1.5rem]">Complete information</h1>
                        <p class="text-[#828282]">Information will be saved</p>
                    </div>
                    <div class="pl-8">
                        <form action="#" method="post">
                            
                            <div class="flex items-center"> 
                                <div class="h-14 w-14 rounded-md border border-gray-300 flex justify-center items-center">
                                    <img src="/src/images/blank_photo.jpg" alt="profilepicture" class="w-12 h-12 opacity-40 rounded-md border-gray-400 ">
                                    <input type="file" class=" top-0 right-0 left-0 bottom-0 custom-input" id="fotoperfil" name="fotoperfil" hidden>
                                </div>
                                <label for="fotoperfil" class="pl-3 font-light text-[#828282]" >ADD PHOTO</label>
                            </div>

                            <label for="nombre" class="text-sm ">Name</label><br>
                            <input type="text" name="nombre" id="nombre" placeholder="Enter your name..." class="h-11 w-2/4 border border-gray-300 rounded-md  mb-1"><br>

                            <label for="biografia" class="text-sm ">Bio</label><br>
                            <input type="text" name="biografia" id="biografia" placeholder="Enter your bio..." class="h-20  w-2/4 border border-gray-300 rounded-md mb-1" ><br>

                            <label for="telefono" class="text-sm ">Phone</label><br>
                            <input type="text" name="telefono" id="telefono" placeholder="Enter your name..." class="h-11 w-2/4 border border-gray-300 rounded-md  mb-1"><br>

                            <label for="correo" class="text-sm ">Email</label><br>
                            <input type="text" name="correo" id="correo" placeholder="Enter your name..." class="h-11 w-2/4 border border-gray-300 rounded-md  mb-1"><br>

                            <label for="contrasena" class="text-sm ">Password</label><br>
                            <input type="text" name="contrasena" id="contrasena" placeholder="Enter your name..." class="h-11 w-2/4 border border-gray-300 rounded-md  mb-3"><br>

                            <button class="py-2 px-6 bg-blue-500 text-white rounded-md" name="save">Save</button>
                        </form>
                    </div>
                </div>
            </section> 
        </div>
    </main>
</body>

</html> 