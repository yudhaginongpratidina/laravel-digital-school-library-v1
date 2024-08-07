{{-- USERS MANAGEMENT --}}
@if (request()->routeIs('users.index'))
    <div class="flex items-center">
        <form id="deleteSelectionForm" action="{{ route('users.deleteSelection') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" id="deleteSelectionButton" class="py-2 px-4 bg-red-500 hover:bg-red-600 text-white">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
        <a href="{{ route('users.create') }}"
            class="px-4 py-2 font-semibold bg-slate-800 hover:bg-orange-500 text-white duration-200">
            <i class="fa-solid fa-user-plus"></i>
        </a>
    </div>
@endif
