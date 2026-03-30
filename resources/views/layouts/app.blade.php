<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Github</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    @include('partials.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')
<script>
    const toggle = document.getElementById('theme-toggle');
    const dot = document.getElementById('toggle-dot');

    // Load saved theme
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        toggle.checked = true;
        dot.style.transform = 'translateX(100%)';
    }

    toggle.addEventListener('change', () => {
        if (toggle.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            dot.style.transform = 'translateX(100%)';
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            dot.style.transform = 'translateX(0)';
        }
    });
</script>
</body>
</html>
