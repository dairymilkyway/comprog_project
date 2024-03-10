<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Artwork Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .navbar-links {
            display: flex;
            align-items: center;
        }

        .navbar-links a:not(:last-child) {
            margin-right: 20px;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0; /* Initially hide all images */
            transition: opacity 1s ease-in-out; /* Smooth opacity transition */
        }

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

        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .hero p {
            font-size: 1.5rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            background-color: #ff3366;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #cc0044;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 40px; /* Increase padding for more space */
    border-radius: 10px; /* Rounder corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    max-width: 400px; /* Limit width for readability */
    width: 90%; /* Responsive width */
    text-align: center; /* Center text */
}


    </style>
</head>

<body>
    <nav class="navbar flex items-center justify-between px-4 py-2">
        <div class="navbar-brand flex items-center">
            <img src="/images/aaaa.png" alt="Artwork Shop Logo" class="h-12 w-12 mr-3">
            <div class="text-xl font-bold">Artwork Shop</div>
        </div>
        <div class="navbar-links">
            <a href="#" class="text-white">About</a>
            <a href="#" class="text-white">Contact</a>
        </div>
    </nav>

    <div class="hero relative">
        <div class="hero-background" style="background-image: url('images/art/art1.jpg'); opacity: 1;"></div>
        <div class="hero-background" style="background-image: url('images/art/art2.jpg')"></div>
        <div class="hero-background" style="background-image: url('images/art/art3.jpg')"></div>
        <div class="hero-background" style="background-image: url('images/art/art4.jpg')"></div>
        <div class="hero-background" style="background-image: url('images/art/art5.jpg')"></div>
        <div class="hero-background" style="background-image: url('images/art/art6.jpg')"></div>
        <div class="hero-content">
            <h1>Welcome to Artwork Shop</h1>
            <p>Discover and buy unique artworks</p>
            <button class="btn mt-6" onclick="openModal('login-modal')">Login</button>
            <button class="btn mt-5" onclick="openModal('register-modal')">Register</button>
        </div>
    </div>

 <!-- Login Modal -->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <form action="/login" method="post">
            <label for="username" class="block mb-2">Username:</label>
            <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded mb-4">

            <label for="password" class="block mb-2">Password:</label>
            <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mb-4">

            <button type="submit" class="btn w-full">Login</button>
        </form>
        <button onclick="closeModal('login-modal')" class="btn mt-4">Close</button>
    </div>
</div>

<!-- Register Modal -->
<div id="register-modal" class="modal">
    <div class="modal-content">
        <h2 class="text-2xl font-bold mb-4">Register</h2>
        <form action="/register" method="post">
            <label for="username" class="block mb-2">Username:</label>
            <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded mb-4">

            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded mb-4">

            <label for="password" class="block mb-2">Password:</label>
            <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mb-4">

            <button type="submit" class="btn w-full">Register</button>
        </form>
        <button onclick="closeModal('register-modal')" class="btn mt-4">Close</button>
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
            document.querySelectorAll('.hero-background').forEach((bg, i) => {
                if (i === index % images.length) {
                    bg.style.opacity = '1';
                } else {
                    bg.style.opacity = '0';
                }
            });
            index++;
        }

        setInterval(changeBackground, 8000); // Change background every 8 seconds

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
        }

        // Close the modal when clicking outside the modal content
        window.onclick = function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        };
    </script>
</body>

</html>
