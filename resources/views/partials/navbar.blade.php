<nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Github</h1>
        <ul class="flex space-x-6">
            <li><a href="{{ route('home') }}" class="hover:text-blue-500">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-blue-500">About</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a></li>
            <li><a href="{{ route('features') }}" class="hover:text-blue-500">Feature</a></li>
            
            <label class="flex items-center cursor-pointer">
                <span class="mr-2">🌞</span>

                <div class="relative">
                    <input type="checkbox" id="theme-toggle" class="sr-only">

                    <div class="w-10 h-5 bg-gray-300 rounded-full shadow-inner"></div>

                    <div id="toggle-dot"
                        class="absolute left-0 top-0 w-5 h-5 bg-white rounded-full shadow transform transition">
                    </div>
                </div>

                <span class="ml-2"></span>
        </label>

        </ul>
    </div>
</nav>