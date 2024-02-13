<?php
require_once "./functions.php"; // Inclure vos fonctions d'authentification
session_start();

if (isset($_SESSION['user_id'])) {
    // L'utilisateur est déjà connecté, redirigez-le vers la page d'administration.
    header("Location: ?page=admin_list");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Le formulaire de connexion a été soumis.

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations d'identification de l'utilisateur (utilisez vos fonctions d'authentification).
    if (authenticateUser($username, $password)) {
        // L'utilisateur est authentifié avec succès.

        // Stockez l'ID de l'utilisateur dans la session.
        $_SESSION['user_id'] = getUserId($username); // Remplacez cette ligne par la fonction appropriée.

        // Redirigez l'utilisateur vers la page d'administration.
        header("Location: ?page=admin_list");
        exit();
    } else {
        // Échec de l'authentification, affichez un message d'erreur.
        $error_message = "Identifiants incorrects. Veuillez réessayer.";
    }
}

// Chargez le modèle de vue pour afficher le formulaire de connexion.
include "./views/template_admin_login.phtml";
?>