@if (request()->routeIs('dashboard.index'))
    <div class="w-full h-[60px] flex items-center justify-between">
        <div class="h-full flex flex-col justify-center">
            <h1 class="text-lg font-bold uppercase">dashboard</h1>
            <div class="w-[90px] h-0.5 bg-orange-500"></div>
        </div>
        <div class="flex items-center">
            <a href="" class="px-4 py-2 font-semibold bg-slate-800 hover:bg-orange-500 text-white duration-200">...</a>
        </div>
    </div>
@endif