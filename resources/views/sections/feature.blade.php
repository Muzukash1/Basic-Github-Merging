@extends('layouts.app')

@section('content')
<section class="py-20 bg-gradient-to-r from-gray-100 to-gray-300 text-black min-h-screen">
    <div class="max-w-5xl mx-auto px-4">

        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Powerful Features
            </h1>
            <p class="text-lg text-gray-700">
                Explore what makes our application <strong>fast</strong>, <strong>efficient</strong>, and <strong>easy to use</strong>.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">⚡ Fast Performance</h3>
                <p class="text-gray-600">
                    Experience lightning-fast loading and smooth interactions designed for productivity.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">🔒 Secure System</h3>
                <p class="text-gray-600">
                    Built with modern security practices to keep your data safe and protected.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-2">🎯 User Friendly</h3>
                <p class="text-gray-600">
                    Clean and intuitive interface that makes everything simple and easy to navigate.
                </p>
            </div>

        </div>

        <!-- CTA -->
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-4">
                Want to know more?
            </h2>

            <p class="mb-6 text-gray-700">
                Learn more about our mission and the people behind this platform.
            </p>

            <a href="{{ route('about') }}"
               class="inline-block bg-black text-white font-semibold px-6 py-3 rounded-full shadow hover:scale-105 transition">
                Learn More →
            </a>
        </div>

    </div>
</section>
@endsection