<!DOCTYPE html>
<html lang="en">

<head>
    {{-- FOR META --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Laravel School Digital Library">
    <meta author="Yudha Bionic">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- FOR STYLE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title> @yield('title') </title>
</head>

<body class="select-none">
    {{-- NAVBAR --}}
    @include('partials.admin.navbar')

    {{-- CONTENT WRAPPER --}}
    <div class="w-full h-full flex bg-gray-100">
        {{-- SIDEBAR --}}
        @include('partials.admin.aside')

        {{-- MAIN CONTENT --}}
        <div class="w-full h-full pt-16 px-6 flex flex-col gap-2.5">
            @include('partials.admin.heading')
            <div class="w-full flex items-center justify-between">
                @include('partials.admin.search')
                @include('partials.admin.action')
            </div>
            @include('partials.admin.session')
            @yield('contents')
            @include('partials.admin.pagination')
        </div>
    </div>

    {{-- NAVIGATION BUTTON (MOBILE) --}}
    {{-- @include('partials.admin.navigation-button') --}}

    {{-- FOOTER --}}
    @include('partials.admin.footer')

    {{-- FOR SCRIPT --}}
    @stack('custom-scripts')
</body>

</html>
