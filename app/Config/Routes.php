<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes principales
$routes->get('acceuil', 'Home::index');
$routes->get('services', 'Services::index');
$routes->get('reservation', 'Reservation::index');
$routes->get('a-propos', 'Apropos::index');
$routes->get('moncompte', 'Account::index');
$routes->get('contact', 'Contact::index');
$routes->get('plats', 'Plats::index');
$routes->get('plats/detail/(:num)', 'Plats::detail/$1');
$routes->post('confirmer', 'Commande::confirmer');
$routes->get('commandes', 'Commande::index');

// Authentification
$routes->get('connecter', 'Connexion::index');
$routes->post('connecter', 'Connexion::login');
$routes->get('deconnecter', 'Connexion::deconnecter');
$routes->get('inscription', 'Inscription::index');
$routes->post('add', 'Inscription::add');

// Gestion des utilisateurs
$routes->get('modifier', 'Modifier::index');
$routes->post('modifier', 'Modifier::update');
// Gestion admin
$routes->post('insererplat', 'Admin::insererPlat');
$routes->get('insererplat', 'Admin::insererPlat');
$routes->get('modifierplat/(:num)', 'Admin::modifierPlat/$1');
$routes->post('modifierplat/(:num)', 'Admin::modifierPlat/$1');
$routes->get('afficher_clients', 'Admin::afficherClients');
$routes->get('afficher_commandes', 'Admin::afficherCommandes');
$routes->get('afficher_plats', 'Admin::afficherPlats');
$routes->get('supprimerClient/(:num)', 'Admin::supprimerClient/$1');
$routes->get('supprimerPlat/(:num)', 'Admin::supprimerPlat/$1');
$routes->get('ajout_client', 'Admin::ajoutClient');
$routes->post('ajout_client', 'Admin::ajoutClient');







