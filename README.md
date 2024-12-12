# Système de Gestion des services de traiteur🍴

Ce projet est une application web de Gestion des services de traiteur qui permet aux administrateurs et aux clients d'interagir efficacement. Les fonctionnalités incluent la gestion des plats, des commandes et des utilisateurs.

## 🚀 Fonctionnalités Principales

### Pour les Administrateurs :

- **Gestion des Plats** :
  - Ajouter, modifier ou supprimer des plats avec leurs détails (nom, description, prix, image, disponibilité).
- **Gestion des Clients** :
  - Afficher la liste des clients.
  - Ajouter ou supprimer un client.
- **Gestion des Commandes** :
  - Afficher les commandes des clients.

### Pour les Clients :

- **Compte Client** :
  - Inscription et connexion.
  - Modification des informations personnelles.
- **Commande** :
  - Parcourir les plats disponibles.
  - Voir les détails d'un plat spécifique.
  - Passer une commande avec plusieurs plats.
  - Voir l'historique des commandes passées.

## 🛠️ Technologies Utilisées

- **Backend** : CodeIgniter 4 (Framework PHP)
- **Frontend** : HTML5, CSS3, Tailwind CSS
- **Base de Données** : MySQL
- **Autres Outils** :
  - Utilisation de sessions pour l'authentification.
  - Gestion des routes simplifiée.

## 📂 Architecture de la Base de Données

### Tables Principales :
1. **Administrateurs** :
   - Stocke les informations des administrateurs (id, nom, email, mot de passe).
2. **Clients** :
   - Contient les informations des clients (nom, prénom, email, téléphone, adresse, mot de passe).
3. **Plats** :
   - Gère les informations des plats (id, nom, description, prix, image, disponibilité).
4. **Commandes** :
   - Enregistre les commandes passées par les clients avec leur total.
5. **Détails des Commandes** :
   - Relie une commande à ses plats, avec des informations sur la quantité et le prix unitaire.

##IMANE


   `
