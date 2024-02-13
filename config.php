<?php
define("CONFIG_SITE_TITLE", "Mon modèle MVC PHP");
define("CONFIG_ROUTES", [
    "home" => "Home",
    "gallery" => "Gallery",
    "contact" => "Contact",
    "api" => "API JSON",
    "admin_list" => "Admin List",
    "contact_list" => "Contact List",
    "admin_login" => "Admin Login", // Nouvelle route pour la page de connexion de l'administration
    "admin_logout" => "Admin Logout", // Nouvelle route pour la déconnexion de l'administration
]);

// Constantes pour la base de données
const DB_HOST = "localhost";
const DB_NAME = "mvc_php_tp";
const DB_USER = "root";
const DB_PASS = "";

// Constantes pour l'authentification
define("AUTH_USERNAME", "admin"); // Nom d'utilisateur de l'administrateur
define("AUTH_PASSWORD", "password123"); // Mot de passe de l'administrateur
//J'ai ajouté les constantes AUTH_USERNAME et AUTH_PASSWORD pour stocker le nom d'utilisateur et le mot de passe de l'administrateur.

function connectDB(): PDO
{
    $db = new PDO('mysql:host=' . DB_HOST . ';port=3306;dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
    return $db;
}
?>

