@extends('layouts.app')

@section('content')
<section class="min-h-screen py-20 px-4 bg-gray-50">
    <div class="max-w-2xl mx-auto">
        <!-- Headline -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">Contact Me</h1>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-300 rounded-lg text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-300 rounded-lg text-red-800">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Name <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Your Name"
                        value="{{ old('name') }}"
                    >
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="your.email@example.com"
                        value="{{ old('email') }}"
                    >
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        Message <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="message" 
                        name="message" 
                        required
                        rows="5"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                        placeholder="Your message..."
                    >{{ old('message') }}</textarea>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-gray-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors duration-200"
                >
                    Send
                </button>
            </form>
        </div>

        <!-- Social Links -->
        <div class="text-center">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Or connect via</h3>
            <div class="flex justify-center space-x-6">
                <a href="https://github.com" target="_blank" class="text-gray-600 hover:text-gray-900 transition-colors">
                    GitHub
                </a>
                <a href="https://linkedin.com" target="_blank" class="text-gray-600 hover:text-blue-600 transition-colors">
                    LinkedIn
                </a>
                <a href="mailto:your.email@example.com" class="text-gray-600 hover:text-red-600 transition-colors">
                    Email
                </a>
            </div>
        </div>
    </div>
</section>
@endsection