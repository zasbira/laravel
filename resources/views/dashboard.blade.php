<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded p-6">
            <p>Bienvenue sur votre tableau de bord, {{ Auth::user()->name }} !</p>

            <ul class="mt-4 list-disc list-inside">
                <li><a href="{{ route('profile.edit') }}" class="text-blue-500">Modifier mon profil</a></li>
                <li><a href="{{ route('projects.index') }}" class="text-blue-500">Gérer mes projets</a></li>
                <li><a href="{{ route('skills.index') }}" class="text-blue-500">Gérer mes compétences</a></li>
                <li><a href="{{ route('profile.show', Auth::user()->username) }}" class="text-blue-500">Voir mon profil public</a></li>
            </ul>
        </div>
    </div>
</x-app-layout>
