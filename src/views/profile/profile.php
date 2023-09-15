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
                <div  class="flex flex-col items-center pb-4">
                    <h1 class="font-semibold text-[1.8rem]">Personal info</h1>
                    <h3>Basic info, like your name and photo</h3>
                </div>
                <div class="border rounded-md w-[60%] h-auto shadow-md">
                    <div class="flex justify-between items-center border border-b-gray-400 py-6 px-8  ">
                        <div>
                            <h1 class="font-semibold text-[1.5rem]">Profile</h1>
                            <p class="text-[#828282]">Some info may be visible to other people</p>
                        </div>
                        <div>
                            <form action="#" method="post">
                                <button type="submit" value="" class="py-1 px-6 border border-gray-400 text-[#828282] rounded-lg">Edit</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="w-full flex flex-row items-center py-4 px-8 border border-b-gray-400 ">
                            <span class="text-[#BDBDBD] w-[15%]">PHOTO</span>
                            <div class="ml-32 py-0">
                                <div class="w-16 h-16 flex justify-center items-center border border-gray-400 rounded-md ">
                                    <img src="/src/images/blank_photo.jpg" alt="profilePhoto">
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-row py-5 px-8 border border-b-gray-400 ">
                            <span class="text-[#BDBDBD] w-[15%]  ">NAME</span>
                            <span class="font-semibold ml-32  ">Xanthe Neal</span>
                        </div>
                        <div class="w-full flex flex-row py-5 px-8 border border-b-gray-400 ">
                            <span class="text-[#BDBDBD] w-[15%]  ">BIO</span>
                            <span class="font-semibold  ml-32">I am a software developer and a big fan of devchallenges..</span>
                        </div>
                        <div class="w-full flex flex-row py-5 px-8 border border-b-gray-400 ">
                            <span class="text-[#BDBDBD] w-[15%]  ">PHONE</span>
                            <span class="font-semibold ml-32">908249274292</span>
                        </div>
                        <div class="w-full flex flex-row py-5 px-8 border border-b-gray-400 ">
                            <span class="text-[#BDBDBD] w-[15%]  ">EMAIL</span>
                            <span class="font-semibold  ml-32">xanthe.neal@gmail.com</span>
                        </div>
                        <div class="w-full flex flex-row py-5 px-8 border border-b-gray-400 rounded-md ">
                            <span class="text-[#BDBDBD] w-[15%]  ">PASSWORD</span>
                            <span class="font-semibold ml-32">***********</span>
                        </div>
                       
                    </div>
                </div>
            </section> 
        </div>
    </main>
</body>

</html> 