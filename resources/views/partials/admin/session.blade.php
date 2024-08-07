@if (session()->has('success'))
    <div class="w-full h-12 bg-green-500 text-white flex items-center px-4">
        <h1 class="text-md font-medium">{{ session('success') }}</h1>
    </div>
@endif

@if (session()->has('error'))
    <div class="w-full h-12 bg-red-500 text-white flex items-center px-4">
        <h1 class="text-md font-medium">{{ session('error') }}</h1>
    </div>
@endif
