<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            📁 Mes Projets
        </h2>
    </x-slot>

    <div class="py-8 max-w-6xl mx-auto sm:px-6 lg:px-8">

        {{-- Bouton Ajouter --}}
        <div class="flex justify-end mb-6">
            <a href="{{ route('projects.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow">
               ➕ Ajouter un projet
            </a>
        </div>

        {{-- Message de succès --}}
        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Liste des projets --}}
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @forelse($projects as $project)
                <div class="bg-white shadow-md border border-gray-100 rounded-xl p-5 hover:shadow-lg transition">
                    <h3 class="text-lg font-bold text-gray-800">{{ $project->title }}</h3>
                    <p class="text-gray-600 mt-1">{{ $project->description }}</p>

                    @if ($project->link)
                        <a href="{{ $project->link }}" target="_blank"
                           class="inline-block mt-2 text-blue-500 hover:underline">
                            🔗 Voir le lien
                        </a>
                    @endif

                    <div class="mt-4 flex justify-between text-sm text-gray-500">
                        <a href="{{ route('projects.edit', $project) }}" class="text-indigo-600 hover:underline">✏️ Modifier</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">🗑️ Supprimer</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-gray-500 text-center col-span-full italic">Aucun projet pour le moment.</div>
            @endforelse
        </div>

    </div>
</x-app-layout>
