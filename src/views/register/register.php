<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/styles/register/register.css">
</head>
<body class="w-screen h-screen">
    <main class="w-full h-full flex flex-col justify-center items-center">
        <div class="w-[30%] h-[65%] shadow-md border rounded-lg flex flex-col justify-center items-center gap-8 " >
            <section class="w-[80%] flex flex-col gap-2">
                <div class="flex justify-start items-center gap-2 ">
                    <div class="w-[2rem] h-[2rem] flex justify-center items-center"><img src="/src/images/devlogo.jpg" alt="devlogo"></div>
                    <h1 class="font-bold text-xs ">devchallenges</h1>
                </div>
                <h1 class="font-semibold ">Join thousands of learners from <br>around the world</h1>
                <h3 class="font-normal text-sm ">Master web development by making real-life projects. There are multiple paths for you to choose</h3>
            </section>
            <section class="w-[80%] h-[25%] flex flex-col items-center">
                <form action="/src/index.php" method="post" class="w-full prueba flex flex-col ">
                    <div class="border rounded-lg flex items-center h-[2.5rem]">
                        <img src="/src/images/email.svg" alt="email" class="px-2 ">
                        <input type="text" placeholder="Email" name="correo" class="appearance-none w-full h-full rounded-lg" required>
                    </div>
                    <div class="border rounded-lg flex items-center h-[2.5rem]">
                        <img src="/src/images/lock.svg" alt="password" class="px-2 ">
                        <input type="password" placeholder="Password" name="contrasena" class="appearance-none w-full h-full rounded-lg" required>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white rounded-lg w-full h-8" name="register">Start coding now</button>
                </form>
            </section>
            <section class="w-[80%] flex flex-col items-center gap-2">
                <p class="text-[#828282] text-sm">or continue with these social profile</p>
                <div class="flex justify-evenly gap-4">
                    <div><img src="/src/images/Google.svg" alt="socialMedia"></div>
                    <div><img src="/src/images/Facebook.svg" alt="socialMedia"></div>
                    <div><img src="/src/images/Twitter.svg" alt="socialMedia"></div>
                    <div><img src="/src/images/Gihub.svg" alt="socialMedia"></div>
                </div>
                <p class="text-[#828282]">Adready a member? <a href="/src/views/login/login.php" class="text-blue-700 ">Login</a></p>
            </section>
        </div>
        <div>
            <?php 
                session_start();
                if (isset($_SESSION["mensaje_error"])) {
                    echo($_SESSION["mensaje_error"]);
                    unset($_SESSION["mensaje_error"]);
                }else {
                    session_destroy();
                }
            ?>
        </div>
    </main>
</body>
</html>