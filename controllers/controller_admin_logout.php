<?php
// Inclure la configuration et initialiser la session
require "./config.php";
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    // L'utilisateur est connecté, déconnectez-le
    $_SESSION['admin_logged_in'] = false;
    // Vous pouvez également effectuer d'autres actions de nettoyage de session si nécessaire

    // Rediriger vers la page de connexion ou une autre page de votre choix
    header("Location: ?page=admin_login"); // Redirigez vers la page de connexion de l'administration
} else {
    // Si l'utilisateur n'était pas connecté, redirigez-le vers la page de connexion de l'administration
    header("Location: ?page=admin_login");
}