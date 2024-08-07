<aside class="hidden lg:block w-72 h-full pt-[60px] border-r border-gray-200 bg-slate-800">

    {{-- DASHBOARD --}}
    <a href="{{ route('dashboard.index') }}" class="w-full h-14 box-border flex items-center {{ request()->routeIs(['dashboard.index']) ? 'bg-slate-700 text-white' : 'hover:bg-orange-500 text-white' }}">
        <div class="w-14 h-14 flex items-center justify-center">
            <i class="fa-brands fa-dashcube text-2xl"></i>
        </div>
        <h1 class="text-md font-medium ml-4">Dashboard</h1>
    </a>

    {{-- USERS MANAGEMENT --}}
    <a href="{{ route('users.index') }}" class="w-full h-14 box-border flex items-center {{ request()->routeIs(['users.index']) ? 'bg-slate-700 text-white' : 'hover:bg-orange-500 text-white' }}">
        <div class="w-14 h-14 flex items-center justify-center">
            <i class="fa-solid fa-users text-2xl"></i>
        </div>
        <h1 class="text-md font-medium ml-4">Users Management</h1>
    </a>

</aside>