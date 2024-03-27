<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    /* Custom Styles */
    @keyframes fade {
        0% {
            opacity: 0;
        }
        20% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .bg-image {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        animation: fade 12s ease-in-out infinite;
    }

    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(255,255,255,0.5), rgba(255,255,255,0.5));
    }
</style>
<body>
<div class="relative">
    <div class="bg-image bg-no-repeat bg-cover bg-center" style="background-image: url('images/art/art1.jpg');"></div>
    <div class="bg-overlay"></div>
    <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
        <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
            <div class="self-start hidden lg:flex flex-col  text-black">
                <img src="" class="mb-3">
                <h1 class="mb-3 font-bold text-5xl">Welcome Back </h1>
                <p class="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
                    and publishing industries for previewing layouts and visual mockups</p>
            </div>
        </div>
        <div class="flex justify-center self-center  z-10">
            <div class="p-12 bg-grey mx-auto rounded-2xl w-100 ">
                <div class="mb-4">
                    <h3 class="font-semibold text-2xl text-gray-800">Register </h3>
                    <p class="text-gray-500">Register Your Account</p>
                </div>
                <div class="space-y-5">
                <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700 tracking-wide">Name</label>
                        <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="John Doe">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                        <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="mail@gmail.com">
                    </div>
                    <div class="space-y-2">
                        <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">Password</label>
                        <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="Enter your password">
                    </div>
                        <div class="text-sm">
                            <a href="#" class="text-blue-400 hover:text-blue-500">Forgot your password?</a>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center bg-blue-400  hover:bg-blue-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">Sign in</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const images = [
        'images/art/art1.jpg',
        'images/art/art2.jpg',
        'images/art/art3.jpg',
        'images/art/art4.jpg',
        'images/art/art5.jpg',
        'images/art/art6.jpg'
    ];

    let index = 0;

    function changeBackground() {
        const backgroundImage = document.querySelector('.bg-image');
        backgroundImage.style.backgroundImage = `url(${images[index % images.length]})`;
        index++;
    }

    window.addEventListener('load', () => {
        changeBackground();
        setInterval(changeBackground, 5000); // Change background every 2 seconds
    });
</script>
</body>
</html>
