<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<style>
    /* Custom Styles */
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
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
        backdrop-filter: blur(10px); /* Frosted glass effect */
        -webkit-backdrop-filter: blur(10px); /* Safari support */
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



    .hero-content {
        position: relative;
        z-index: 2; /* Ensure content is above background images */
        color: white;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }

    .hero p {
        font-size: 1.5rem;
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

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes scaleIn {
        from {
            transform: translate(-50%, -50%) scale(0.5);
        }
        to {
            transform: translate(-50%, -50%) scale(1);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

</style>
<body>

<div class="hero relative">
    <div class="hero-background" style="background-image: url('images/art/art1.jpg'); opacity: 1;"></div>
    <div class="hero-background" style="background-image: url('images/art/art2.jpg');"></div>
    <div class="hero-background" style="background-image: url('images/art/art3.jpg');"></div>
    <div class="hero-background" style="background-image: url('images/art/art4.jpg');"></div>
    <div class="hero-background" style="background-image: url('images/art/art5.jpg');"></div>
    <div class="hero-content">
    
    

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

    window.addEventListener('load', () => {
        changeBackground();
        setInterval(changeBackground, 2000); // Change background every 3 seconds
    });
</script>
</body>

</html>
