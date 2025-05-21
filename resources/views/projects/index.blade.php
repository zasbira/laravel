<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes Projets
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter un projet</a>

        @if(session('success'))
            <div class="mt-4 text-green-600">{{ session('success') }}</div>
        @endif

        <div class="mt-4 bg-white shadow overflow-hidden sm:rounded-lg p-6">
            <ul>
                @forelse($projects as $project)
                    <li class="mb-2">
                        <strong>{{ $project->title }}</strong><br>
                        {{ $project->description }}<br>
                        @if ($project->link)
                            <a href="{{ $project->link }}" class="text-blue-500" target="_blank">Voir le lien</a><br>
                        @endif
                        <a href="{{ route('projects.edit', $project) }}" class="text-indigo-600">Modifier</a> |
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </li>
                @empty
                    <p>Aucun projet pour le moment.</p>
                @endforelse
            </ul>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">
            Mes Projets
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('projects.create') }}"
           class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
           Ajouter un projet
        </a>

        @foreach($projects as $project)
            <div class="bg-white shadow rounded p-4 mb-4">
                <h3 class="text-lg font-bold">{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                @if ($project->link)
                    <a href="{{ $project->link }}" class="text-blue-500 underline" target="_blank">Voir</a>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>


