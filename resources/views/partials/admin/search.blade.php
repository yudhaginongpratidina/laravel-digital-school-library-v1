@if (request()->routeIs('users.index'))
    <form action="{{ route('users.index') }}" method="GET">
        <input type="search" name="search" id="search" placeholder="nama / email / role"
            class="w-full lg:w-[400px] p-2 border outline-none" autocomplete="off">
    </form>
@endif
