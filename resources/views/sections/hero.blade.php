<!-- HOME SECTION -->
<section id="home" class="tab-content block py-20">
    <div class="max-w-5xl mx-auto px-6 text-center">

        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Hi, We are the IST Group
        </h1>

        <!-- ✨ TYPING EFFECT -->
        <h3 class="text-2xl font-bold mb-6 text-blue-400">
            <span id="typing"></span>
        </h3>

        <p class="text-lg mb-8">
            We build modern, fast, and responsive web applications for your business.
        </p>

        <!-- BUTTONS -->
        <div class="flex justify-center gap-4 mb-12">
            <a href="#" class="bg-blue-500 px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                About Us
            </a>
            <a href="#" onclick="openModal()" class="hire-btn">Hire Us</a>
        </div>

        <!-- 🔥 STATS SECTION -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <h2 class="text-3xl font-bold text-blue-400">50+</h2>
                <p class="text-gray-400">Projects</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-400">20+</h2>
                <p class="text-gray-400">Clients</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-400">5</h2>
                <p class="text-gray-400">Years Exp</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-400">100%</h2>
                <p class="text-gray-400">Satisfaction</p>
            </div>
        </div>

    </div>

    <!-- MODAL -->
<div id="hireModal" class="fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
    
    <div class="bg-white text-black rounded-lg p-6 w-96 relative animate-fadeIn">
        
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-2 right-3 text-xl">&times;</button>

        <h2 class="text-2xl font-bold mb-4">Hire Us</h2>

        <form>
            <input type="text" placeholder="Your Name" class="w-full mb-3 p-2 border rounded">

            <input type="email" placeholder="Email" class="w-full mb-3 p-2 border rounded">

            <textarea placeholder="Project Details" class="w-full mb-3 p-2 border rounded"></textarea>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                Send Request
            </button>
        </form>

    </div>
</div>
</section>