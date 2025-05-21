<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">
                👋 Bienvenue, {{ Auth::user()->name }}
            </h2>
            
        </div>
    </x-slot>

    <div class="py-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Profil --}}
            <a href="{{ route('profile.edit') }}" class="group bg-blue-100 hover:bg-blue-200 text-blue-900 rounded-2xl p-6 shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-lg font-semibold">Mon Profil</div>
                    <svg class="w-6 h-6 text-blue-700 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <p class="text-sm">Modifier mes informations personnelles</p>
            </a>

            {{-- Projets --}}
            <a href="{{ route('projects.index') }}" class="group bg-green-100 hover:bg-green-200 text-green-900 rounded-2xl p-6 shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-lg font-semibold">Mes Projets</div>
                    <svg class="w-6 h-6 text-green-700 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4z"/>
                    </svg>
                </div>
                <p class="text-sm">Créer, modifier ou supprimer vos projets</p>
            </a>

            {{-- Compétences --}}
            <a href="{{ route('skills.index') }}" class="group bg-yellow-100 hover:bg-yellow-200 text-yellow-900 rounded-2xl p-6 shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-lg font-semibold">Mes Compétences</div>
                    <svg class="w-6 h-6 text-yellow-700 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20l9-5-9-5-9 5 9 5z"/>
                    </svg>
                </div>
                <p class="text-sm">Ajouter ou modifier vos compétences</p>
            </a>

            {{-- Profil public --}}
            <a href="{{ route('profile.show', Auth::user()->username) }}" class="group bg-purple-100 hover:bg-purple-200 text-purple-900 rounded-2xl p-6 shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-lg font-semibold">Profil Public</div>
                    <svg class="w-6 h-6 text-purple-700 group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A8.003 8.003 0 0112 4a8.003 8.003 0 016.879 13.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <p class="text-sm">Voir votre profil tel que les autres le voient</p>
            </a>

        </div>
    </div>
</x-app-layout>
