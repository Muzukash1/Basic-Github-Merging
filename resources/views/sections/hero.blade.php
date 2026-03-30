<!DOCTYPE html>
<html>

<head>
    <title>Tailwind + CSS Example</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section class="home">
        <div class="max-w-5xl mx-auto px-6 text-left home-content">
            <!-- Tailwind + custom CSS -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 custom-title text-white">
                Hi, We are the IST Group
            </h1>
            <h3 class="text-2xl font-bold mb-4 custom-title text-white">
                Sample Website
            </h3>

            <p class="text-lg mb-6 custom-text text-white">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>

            <div class="btn-box">
                <a href="#">About us</a>
                <a href="#">Hire us</a>
            </div>
        </div>
    </section>
</body>

</html>