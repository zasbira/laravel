<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">
            Modifier mon profil
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH') <!-- car ta route utilise PATCH -->

            {{-- Nom --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Nom</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                       class="w-full border border-gray-300 rounded p-2">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="w-full border border-gray-300 rounded p-2">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Titre professionnel --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Titre professionnel</label>
                <input type="text" name="title" value="{{ old('title', $user->title) }}"
                
                       class="w-full border border-gray-300 rounded p-2">
                @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Bio --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Bio</label>
                <textarea name="bio" class="w-full border border-gray-300 rounded p-2" rows="4">{{ old('bio', $user->bio) }}</textarea>
                @error('bio') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Nom d'utilisateur --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Nom d'utilisateur (URL)</label>
                <input type="text" name="username" value="{{ old('username', $user->username) }}"
                       class="w-full border border-gray-300 rounded p-2">
                @error('username') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
               <h1> Enregistrer </h1>
            </button>
        </form>
    </div>
</x-app-layout>
