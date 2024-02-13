<?php
// --- On va charger la config (require obligatoire car important)
require "./config.php";
// --- On va charger le router => permet de déclencher la logique.
require "./services/router.php";

// --- Vérification de la page d'accueil
if ($page === 'admin_login' || $page === 'admin_logout') {
    // Si l'utilisateur accède à la page de connexion ou de déconnexion, on le laisse passer.
    require "./controllers/controller_$page.php";
} elseif ($page === 'admin' && !isset($_SESSION['isAuthenticated'])) {
    // Si l'utilisateur n'est pas connecté et essaie d'accéder à la page d'administration,
    // on le redirige vers la page de connexion.
    header('Location: ?page=admin_login');
} else {
    // Dans tous les autres cas, on charge le contrôleur correspondant à la page.
    require "./controllers/controller_$page.php";
}

// --- On charge la vue
// include "./views/layout.phtml";
?>
