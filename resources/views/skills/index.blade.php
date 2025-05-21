<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes Compétences
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('skills.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter une compétence</a>

        @if(session('success'))
            <div class="mt-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="mt-4 bg-white shadow overflow-hidden sm:rounded-lg p-6">
            <ul>
                @forelse($skills as $skill)
                    <li class="mb-2">
                        <strong>{{ $skill->name }}</strong><br>
                        <a href="{{ route('skills.edit', $skill) }}" class="text-indigo-600">Modifier</a> |
                        <form action="{{ route('skills.destroy', $skill) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </li>
                @empty
                    <p>Aucune compétence ajoutée pour le moment.</p>
                @endforelse
            </ul>
        </div>
    </div>
</x-app-layout>
