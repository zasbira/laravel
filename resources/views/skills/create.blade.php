<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une compétence
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('skills.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block">Nom de la compétence</label>
                <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name') }}">
                @error('name') <div class="text-red-500">{{ $message }}</div> @enderror
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">Ajouter</button>
        </form>
    </div>
</x-app-layout>
