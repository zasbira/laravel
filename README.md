#  Projet Laravel universitaire

## 🎯 Objectif
Créer un profil développeur avec :
- Authentification
- Page publique `/profile/{username}`
- CRUD projets et compétences
- Génération d’un CV PDF

## 🛠️ Stack technique
- Laravel 11
- Laravel Breeze (Blade)
- Tailwind CSS
- DomPDF

## ▶️ Installation

```bash
git clone https://github.com/zasbira/laravel.git
cd laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan serve
