@extends('layouts.admin')
@section('title', 'Users Management')
@section('contents')

    <table class="w-full table-fixed">
        <thead>
            <tr class="text-center bg-slate-800 text-white">
                <th class="w-[35px] border p-2.5">
                    <input type="checkbox" name="checkAll" id="checkAll">
                </th>
                <th class="w-[60px] border p-2.5">No</th>
                <th class="w-[200px] border p-2.5">Name</th>
                <th class="hidden md:table-cell w-[250px] border p-2.5">Email</th>
                <th class="hidden md:table-cell w-[100px] border p-2.5">Role</th>
                <th class="w-[100px] border p-2.5">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr
                    class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }} hover:bg-black hover:bg-opacity-20 hover:text-slate-900">
                    <td class="w-[60px] border p-2.5 text-center">
                        <input type="checkbox" name="check[]" value="{{ $user->id }}" class="checkbox-item">
                    </td>
                    <td class="w-[60px] border p-2.5 text-center">{{ $loop->iteration }}</td>
                    <td class="w-[400px] border p-2.5">{{ $user->name }}</td>
                    <td class="hidden md:table-cell border p-2.5">{{ $user->email }}</td>
                    <td class="hidden md:table-cell w-[200px] border p-2.5 text-center">
                        @if ($user->role == 'admin')
                            <span class="px-2 py-1 bg-rose-500 text-white text-sm rounded-full">Admin</span>
                        @else
                            <span class="px-2 py-1 bg-indigo-500 text-white text-sm rounded-full">User</span>
                        @endif
                    </td>
                    <td class="w-[200px] border p-2.5 text-center">
                        <div class="flex items-center gap-1.5">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="p-2 bg-orange-500 hover:bg-orange-600 text-white duration-100">
                                <i class="fa-solid fa-user-pen"></i>
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="py-2 px-2.5 bg-red-500 hover:bg-red-600 text-white duration-100">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@push('custom-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkAll = document.getElementById('checkAll');
            const checkboxes = document.querySelectorAll('input[name="check[]"]');
            const deleteSelectionButton = document.getElementById('deleteSelectionButton');
            const deleteSelectionForm = document.getElementById('deleteSelectionForm');

            checkAll.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = checkAll.checked;
                });
            });

            deleteSelectionButton.addEventListener('click', function(event) {
                event.preventDefault();

                const selectedIds = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                if (selectedIds.length === 0) {
                    alert('No items selected');
                    return;
                }

                // CONSOLE LOG IDS
                // console.log(selectedIds);

                // KIRIM KE ROUTE DELETE SELECTION
                deleteSelectionForm.action =
                    `{{ route('users.deleteSelection') }}?ids=${selectedIds.join(',')}`;
                deleteSelectionForm.submit();
            });
        });
    </script>
@endpush
