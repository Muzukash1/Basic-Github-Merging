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
    
    <section class="home py-10">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
        
        <!-- Column 1: Image -->
        <div>
            <img 
                src="/images/team-photo.jpg" 
                alt="Sample Image"
                class="w-full h-auto rounded-lg shadow-lg object-cover"
            >
        </div>

        <!-- Column 2: Content -->
        <div class="text-left home-content">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Hi, We are the IST Group
            </h1>

            <h3 class="text-2xl font-bold mb-4 text-white">
                Sample Website
            </h3>

            <p class="text-lg mb-6 text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
            </p>

            <div class="flex gap-4">
                <a href="#" class="px-5 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">
                    About us
                </a>
                <a href="#" class="px-5 py-2 border border-white text-white rounded-md hover:bg-white hover:text-black transition">
                    Hire us
                </a>
            </div>
        </div>

    </div>
</section>
</body>

</html>