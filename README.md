# La Table du Chef

## Contexte du projet

Ce projet vise à développer un site web pour un chef cuisinier mondialement reconnu, offrant une expérience gastronomique unique. Les utilisateurs peuvent découvrir des menus exclusifs, réserver des expériences culinaires à domicile et interagir directement avec le chef.

## Objectifs du Projet

### Site Web avec Multi-Rôles :
- **Utilisateurs (Clients)** :
  - Découvrir les menus proposés par le chef.
  - S’inscrire, se connecter et réserver une expérience culinaire (choisir la date, l'heure et le nombre de personnes).

- **Chefs (Administrateurs)** :
  - Se connecter et gérer les réservations : accepter, refuser, consulter les statistiques des demandes, et gérer leur profil.
  - Afficher des statistiques détaillées pour le chef, incluant les demandes en attente, les demandes approuvées pour la journée et pour le jour suivant, et les informations sur les clients.

### Fonctionnalités Principales :
- **Inscription et Connexion** :
  - Les utilisateurs et chefs s’inscrivent et se connectent. Après une authentification réussie, ils sont redirigés vers des pages spécifiques en fonction de leur rôle.
- **Page Utilisateur (Client)** :
  - Consultation des menus du chef et réservation d'une expérience culinaire avec des options de date, heure, et nombre de personnes.
  - Gestion des réservations : consulter l’historique, modifier ou annuler des réservations.
- **Page Chef (Dashboard)** :
  - Gestion des réservations : accepter ou refuser les demandes en fonction de la disponibilité.
  - Affichage des statistiques détaillées, comme le nombre de demandes en attente, approuvées pour la journée et le jour suivant.
  - Détails du prochain client et de sa réservation.
  - Nombre total de clients inscrits.

## Design :
- **Responsive Design** : Le site doit être compatible avec toutes les tailles d’écrans (mobile, tablette, desktop).
- **Esthétique** : Design moderne et élégant avec des couleurs raffinées pour représenter le luxe.
- **UX/UI** : Interface intuitive et agréable pour garantir une navigation fluide.

## Fonctionnalités JavaScript :
- **Validation des Formulaires avec Regex** : Utilisation d'expressions régulières pour valider les entrées des utilisateurs dans les formulaires.
- **Formulaires Dynamiques d’Ajout de Menus** : Permettre aux chefs d'ajouter dynamiquement plusieurs plats dans un menu.
- **Modals Dynamiques** : Utilisation de modals pour afficher des informations sans recharger la page.
- **SweetAlerts** : Intégration de SweetAlert pour des alertes visuelles élégantes.

## Sécurité des Données :
- **Hashage des Mots de Passe** : Utilisation de techniques sécurisées pour le hashage des mots de passe.
- **Protection contre les Failles XSS (Cross-Site Scripting)** : Nettoyage et échappement des entrées utilisateurs.
- **Prévention des Injections SQL** : Utilisation de requêtes préparées pour interagir avec la base de données.
- **Protection contre les Attaques CSRF** : Mise en place d’un token CSRF pour sécuriser les actions sensibles.

