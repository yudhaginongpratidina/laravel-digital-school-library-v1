@extends('layouts.admin')
@section('title', 'Create User')
@section('contents')

    <form action="{{ route('users.store') }}" method="POST" class="w-full flex flex-col gap-4">
        @csrf

        <div class="w-full max-w-screen-sm flex flex-col gap-1.5">
            <label for="name">Nama <span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}"
                autocomplete="off" required class="w-full p-2 border outline-none">
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full max-w-screen-sm flex flex-col gap-1.5">
            <label for="email">E-Mail <span class="text-red-500">*</span></label>
            <input type="email" name="email" id="email" placeholder="Masukkan email" value="{{ old('email') }}"
                autocomplete="off" required class="w-full p-2 border outline-none">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full max-w-screen-sm flex flex-col gap-1.5">
            <label for="password">Password <span class="text-red-500">*</span></label>
            <input type="password" name="password" id="password" placeholder="*****" value="{{ old('password') }}"
                autocomplete="off" required class="w-full p-2 border outline-none">
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full max-w-screen-sm flex flex-col gap-1.5">
            <label for="password_confirmation">Confirm Password <span class="text-red-500">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="*****" autocomplete="off" required
                class="w-full p-2 border outline-none">
            @error('password_confirmation')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full max-w-screen-sm flex flex-col gap-1.5">
            <h1>Role <span class="text-red-500">*</span></h1>
            <div class="flex gap-2">
                <div class="flex items-center gap-2">
                    <input type="radio" name="role" value="admin" {{ old('role') == 'admin' ? 'checked' : '' }}
                        id="admin" required class="w-4 h-4">
                    <label for="admin">Admin</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" name="role" value="user" {{ old('role') == 'user' ? 'checked' : '' }}
                        id="user" required class="w-4 h-4">
                    <label for="user">User</label>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="p-2 bg-black hover:bg-orange-500 text-white duration-100">Create</button>
            <a href="{{ route('users.index') }}" class="px-2 py-2.5 bg-red-500 hover:bg-red-600 text-white">Cancel</a>
        </div>
    </form>

@endsection
