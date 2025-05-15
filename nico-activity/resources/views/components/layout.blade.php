<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-blue-600 w-full py-4 px-6 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span class="text-white text-xl font-bold">YourBrand</span>
            </div>
            
            <!-- Optional: Add navigation links -->
            <div class="hidden md:flex space-x-6 text-white">
                <a href="#" class="hover:text-blue-200 transition-colors">Home</a>
                <a href="#" class="hover:text-blue-200 transition-colors">About</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Contact</a>
            </div>
        </div>
    </header>
    <div class="flex justify-center items-start">
        {{$slot}}
    </div>
    {{-- {{$footer}} --}}
</body>
</html>