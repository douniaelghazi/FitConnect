# FitConnect

## 📌 Description

FitConnect est une application web développée en PHP natif suivant une architecture MVC.

L'application permet de gérer les activités d'une salle de sport à travers :

- la gestion des adhérents
- la gestion des abonnements
- la gestion des séances

Le projet utilise PHP, MySQL, PDO et CSS.

---

# Structure du projet

```
FITCONNECT
│
├── app
│   ├── Controllers
│   │   ├── AdherentController.php
│   │   ├── AbonnementController.php
│   │   ├── SalleController.php
│   │   └── SeanceController.php
│   │
│   ├── Entities
│   │   ├── Adherent.php
│   │   ├── Abonnement.php
│   │   ├── Salle.php
│   │   └── Seance.php
│   │
│   ├── Repositories
│   │   ├── AdherentRepository.php
│   │   ├── AbonnementRepository.php
│   │   ├── SalleRepository.php
│   │   └── SeanceRepository.php
│   │
│   └── Services
│       ├── AdherentService.php
│       ├── AbonnementService.php
│       ├── SalleService.php
│       └── SeanceService.php
│
├── config
│   └── Database.php
│
├── public
│   ├── css
│   │   └── style.css
│   │
│   ├── index.php
│   └── test.php
│
├── views
│   ├── dashboard
│   │   └── index.php
│   │
│   ├── adherents
│   │   ├── create.php
│   │   ├── edit.php
│   │   └── index.php
│   │
│   ├── abonnements
│   │   ├── create.php
│   │   ├── edit.php
│   │   └── index.php
│   │
│   └── seances
│       ├── create.php
│       ├── edit.php
│       └── index.php
│
└── README.md
```

---

# Fonctionnalités

## Gestion des adhérents

- Ajouter un adhérent
- Modifier un adhérent
- Supprimer un adhérent
- Afficher la liste des adhérents

---

## Gestion des abonnements

- Ajouter un abonnement
- Modifier un abonnement
- Supprimer un abonnement
- Afficher la liste des abonnements

---

## Gestion des séances

- Ajouter une séance
- Modifier une séance
- Supprimer une séance
- Afficher la liste des séances

Une vérification est effectuée avant l'ajout d'une séance afin de s'assurer que l'adhérent possède un abonnement valide.

---

# Technologies utilisées

- PHP 8
- MySQL
- PDO
- HTML5
- CSS3

---

# Architecture

Le projet suit le modèle MVC.

### Controllers

Reçoivent les requêtes utilisateur.

### Services

Contiennent la logique métier.

### Repositories

Effectuent les opérations CRUD avec la base de données.

### Entities

Représentent les objets métier.

### Views

Affichent les interfaces utilisateur.

---

# Base de données

Le projet utilise les tables suivantes :

- adherent
- abonnement
- salle
- seance

Relations principales :

- Un adhérent possède plusieurs abonnements.
- Un adhérent peut effectuer plusieurs séances.
- Une salle accueille plusieurs séances.

---

# Auteur

Projet réalisé dans le cadre d'un projet pédagogique en développement Full Stack PHP.