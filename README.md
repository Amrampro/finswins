# 🌍 FINS-WINS Web Platform

Bienvenue dans le dépôt officiel du site web de **FINS-WINS (Femmes Interface Nord-Sud)**, une organisation dédiée à l’autonomisation des femmes vulnérables entre le Nord et le Sud, notamment les revendeuses Bayam-Sellam et les femmes migrantes.

Ce site a pour but de présenter nos actions, faciliter les dons, renforcer l’engagement communautaire et mettre en lumière nos projets de transformation sociale.

## 🚀 Technologies utilisées

- **Laravel 11** (PHP Framework)
- **Blade** (Moteur de templates)
- **Tailwind CSS** (et Bootstrap)
- **MySQL** (ou autre SGBD)
- **GitHub** pour le versioning collaboratif

## 📁 Structure du projet

```
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
│   └── assets/ (images, CSS, JS)
├── resources/
│   └── views/ (vues Blade)
├── routes/
│   └── web.php
├── storage/
├── tests/
└── .env (configurations locales)
```

## ⚙️ Installation locale

```bash
git clone https://github.com/amrampro/finswins.git
cd finswins
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
php artisan optimize:clear
php artisan serve
```

Configurer ensuite votre base de données dans le fichier `.env`.

## 💡 Fonctionnalités principales

- 🐽 Navigation claire et responsive
- 💬 Formulaire de contact sécurisé
- 🧹 Section Projets & Partenariats
- 💕 Système de dons
- 📊 Tableau de bord d’impact chiffré
- 🗓️ Intégration du calendrier éditorial (citations, projets, vidéos, posts spirituels)
- 🌐 Préparation multilingue (Fr/En)

## 🤝 Contribution

Les contributions sont les bienvenues pour améliorer les performances, la sécurité ou les contenus !  
Merci de proposer une *pull request* après avoir créé une *issue* claire.

## 📄 Licence

Ce projet est open-source sous licence MIT.  
© FINS-WINS, 2025 – *Agir ensemble, transformer nos réalités.*
