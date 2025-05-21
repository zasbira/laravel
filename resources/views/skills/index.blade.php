<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            🛠️ Mes Compétences
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto sm:px-6 lg:px-8">

        {{-- Bouton Ajouter --}}
        <div class="flex justify-end mb-6">
            <a href="{{ route('skills.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg shadow">
               ➕ Ajouter une compétence
            </a>
        </div>

        {{-- Message de succès --}}
        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Liste des compétences --}}
        <div class="bg-white p-6 shadow-md rounded-xl border border-gray-200">
            @forelse($skills as $skill)
                <div class="flex items-center justify-between mb-4 border-b border-gray-100 pb-2">
                    <span class="inline-block bg-green-100 text-green-800 px-4 py-1 rounded-full font-medium">
                        {{ $skill->name }}
                    </span>
                    <div class="flex items-center gap-3 text-sm">
                        <a href="{{ route('skills.edit', $skill) }}" class="text-indigo-600 hover:underline">
                            ✏️ Modifier
                        </a>
                        <form action="{{ route('skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Supprimer cette compétence ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">
                                🗑️ Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 italic">Aucune compétence ajoutée pour le moment.</p>
            @endforelse
        </div>

    </div>
</x-app-layout>
