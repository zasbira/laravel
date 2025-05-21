<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le projet
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('projects.update', $project) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block">Titre</label>
                <input type="text" name="title" class="w-full border rounded p-2" value="{{ old('title', $project->title) }}">
                @error('title') <div class="text-red-500">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Description</label>
                <textarea name="description" class="w-full border rounded p-2">{{ old('description', $project->description) }}</textarea>
                @error('description') <div class="text-red-500">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label class="block">Lien (optionnel)</label>
                <input type="url" name="link" class="w-full border rounded p-2" value="{{ old('link', $project->link) }}">
                @error('link') <div class="text-red-500">{{ $message }}</div> @enderror
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
        </form>
    </div>
</x-app-layout>
