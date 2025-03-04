# Mercenary Marketplace

## Description
DeadHire Marketplace est une plateforme permettant aux utilisateurs de recruter des mercenaires pour des contrats d'assassinat (projet fictif à but éducatif). Il y a deux types d'utilisateurs :
- **Visiteurs** : utilisateurs qui passent des commandes.
- **Tueurs** : mercenaires qui acceptent ou refusent des contrats.

Ce projet est développé en **Angular 19** pour le frontend et **Laravel 12.x** pour le backend.

---

## Fonctionnalités

### Pour le visiteur :
- Page d'accueil affichant une liste de mercenaires.
- Consultation du profil d'un mercenaire avec détails (spécialités, prix, historique).
- Passation de commandes avec sélection des options (preuves, type de meurtre, etc.).
- Système de paiement direct.
- Création d'un compte pour suivre ses commandes et historiques.
- Filtrage des mercenaires par type de mission et prix.

### Pour le tueur :
- Création d'un compte mercenaire.
- Connexion et accès à un tableau de bord.
- Acceptation ou refus des cibles proposées.
- Possibilité de fournir une preuve d'exécution.

---

## Installation

### Prérequis
- **Node.js** & **npm** (dernière version)
- **Angular CLI**
- **PHP** & **Composer**
- **MariaDB** (ou autre base de données compatible Laravel) -> XAMPP pour test local

### Installation du Frontend (Angular)
```bash
cd frontend
npm install
ng serve
```
Accéder à l'application via : `http://localhost:4200`

### Installation du Backend (Laravel)
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
Accéder à l'API via : `http://localhost:8000`

---

## Configuration
### Base de données
Configurer le fichier `.env` du backend avec vos informations MySQL :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DeadHire
DB_USERNAME=root
DB_PASSWORD=
```

---

## Technologies utilisées
- **Frontend** : Angular
- **Backend** : Laravel
- **Base de données** : MariaDB

---

## Auteurs
- **[Noah Dubail | Bryan Chatillon]**

---

## Licence
Projet réalisé à des fins éducatives uniquement.

