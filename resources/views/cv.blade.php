<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV - {{ $user->name }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }
        .header {
            background-color: #1e40af;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .section-title {
            font-weight: bold;
            font-size: 16px;
            color: #1e3a8a;
            margin-top: 20px;
            border-bottom: 1px solid #cbd5e1;
        }
        .badge {
            display: inline-block;
            background-color: #d1fae5;
            color: #065f46;
            border-radius: 12px;
            padding: 4px 10px;
            font-size: 11px;
            margin: 3px;
        }
        .project {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <div class="header">
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->title }}</p>
    </div>

    {{-- Bio --}}
    <div>
        <h2 class="section-title">Profil</h2>
        <p>{{ $user->bio }}</p>
    </div>

    {{-- Compétences --}}
    <div>
        <h2 class="section-title">Compétences</h2>
        @if($user->skills->count())
            @foreach ($user->skills as $skill)
                <span class="badge">{{ $skill->name }}</span>
            @endforeach
        @else
            <p>Aucune compétence renseignée.</p>
        @endif
    </div>

    {{-- Projets --}}
    <div>
        <h2 class="section-title">Projets</h2>
        @if($user->projects->count())
            @foreach ($user->projects as $project)
                <div class="project">
                    <strong>{{ $project->title }}</strong><br>
                    <span>{{ $project->description }}</span>
                </div>
            @endforeach
        @else
            <p>Aucun projet disponible.</p>
        @endif
    </div>

</body>
</html>
