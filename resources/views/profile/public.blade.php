<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            👤 Profil public de {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-right">
                <a href="{{ route('pdf.generate', $user->username) }}"
                   class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-black font-semibold px-5 py-2.5 rounded-lg shadow-md transition">
                    📄 Télécharger le CV (PDF)
                </a>
            </div>
            {{-- Carte profil --}}
            <div class="bg-white rounded-xl shadow p-6 mb-8 border border-gray-200">
                <h3 class="text-xl font-semibold text-indigo-800 mb-1">{{ $user->title }}</h3>
                <p class="text-gray-700">{{ $user->bio }}</p>
            </div> {{-- Bouton PDF --}}
            

            {{-- Projets --}}
            <div class="mb-8">
                <h4 class="text-lg font-bold text-blue-800 mb-4">📁 Projets</h4>
                @if ($user->projects->count())
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($user->projects as $project)
                            <div class="bg-blue-50 border border-blue-100 rounded-lg shadow-sm p-4 hover:shadow-md transition">
                                <h5 class="text-md font-semibold text-blue-900">{{ $project->title }}</h5>
                                <p class="text-sm text-blue-800 mt-1">{{ $project->description }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 italic">Aucun projet disponible.</p>
                @endif
            </div>

            {{-- Compétences --}}
            <div class="mb-8">
                <h4 class="text-lg font-bold text-green-800 mb-4">🧠 Compétences</h4>
                @if ($user->skills->count())
                    <div class="flex flex-wrap gap-2">
                        @foreach ($user->skills as $skill)
                            <span class="bg-green-100 text-green-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm">
                                {{ $skill->name }}
                            </span>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 italic">Aucune compétence listée.</p>
                @endif
            </div>

           

        </div>
    </div>
</x-app-layout>
