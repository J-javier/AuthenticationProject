<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body class="w-screen h-screen">
    <main class="w-full h-full flex justify-center items-center">
        <div class="w-[30%] h-[65%] shadow-md border rounded-lg " >
            <section>
                <div>
                    <div><img src="/src/d" alt="devlogo">
                    <h1>devchallenges</h1></div>
                </div>
                <h1>Join thousands of learners from around the world</h1>
                <h3>Master web development by making real-life projects. There are multiple paths for you to choose</h3>
            </section>
            <section>
                <form action="/src/index.php" method="post">
                    <div>
                        <img src="/src/images/email.svg" alt="email">
                        <input type="text" name="correo">
                    </div>
                    <div>
                        <img src="/src/images/lock.svg" alt="password">
                        <input type="password" name="contrasena">
                    </div>
                    <button type="submit">Start coding now</button>
                </form>
            </section>
            <section>
                <p>or continue with these social profile</p>
                <div>

                </div>
                <p><a href="/src/views/register/register.php">L</a></p>
            </section>
        </div>
    </main>
</body>
</html>