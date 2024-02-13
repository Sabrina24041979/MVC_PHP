
<?php
// Si la variable page est définie dans l'url
// On utilise page pour trouver le controlleur 
// Sinon la page c'est home et le controlleur c'est 
// controller_home.php (logique)
// Si la variable page est définie dans l'url
// On utilise page pour trouver le controlleur 
// if ( isset($_GET['page']) && file_exists("./controllers/controller_".$_GET['page'].".php") ){
//     $page = $_GET['page'];
// Sinon la page c'est home et le controlleur c'est 
// controller_home.php (logique)
// } else {
//     $page = 'home';
// }
$getPage = isset($_GET['page']) ? strtolower($_GET['page']) : ""; // Le code ci-dessus récupère la valeur de 'page' depuis l'URL et la convertit en minuscules.
$page = isset($getPage) && file_exists("./controllers/controller_".$getPage.".php") ? $getPage : array_key_first(CONFIG_ROUTES);
// Le code ci-dessus vérifie si la valeur $getPage est définie et si un fichier de contrôleur correspondant existe.
// Si oui, il utilise cette valeur. Sinon, il utilise la première clé de CONFIG_ROUTES (qui n'est pas définie ici).

// CONFIG_ROUTES n'est pas défini dans ce code, il manque donc une partie importante pour comprendre comment le routage est géré.

?>

<?php
// ...

$getPage = isset($_GET['page']) ? strtolower($_GET['page']) : "";

// Ajout des routes pour la page de connexion et la déconnexion de l'administration
$adminRoutes = [
    "admin_login" => "Admin Login", // Route pour la page de connexion de l'administration
    "admin_logout" => "Admin Logout", // Route pour la déconnexion de l'administration
];

// Fusionner les routes de l'administration avec les autres routes
$routes = array_merge(CONFIG_ROUTES, $adminRoutes);

$page = isset($getPage) && file_exists("./controllers/controller_" . $getPage . ".php") ? $getPage : array_key_first($routes);

// ...