<?php
$db = connectDB();

$id = intval( $_GET['id'] );// on récupère l'id depuis l'url
$sql = $db->prepare("SELECT * FROM picture WHERE id='".$id."'");// on la convertit en entier pour être plus prudent...
$sql->execute();
$pic = $sql->fetch(PDO::FETCH_ASSOC);
// --- on charge la vue
include "./views/layout.phtml";

?>

<?php
$db = connectDB();

$id = intval( $_GET['Id'] );// on récupère l'id depuis l'url
$sql = $db->prepare("SELECT * FROM users WHERE Id='".$id."'");// on la convertit en entier pour être plus prudent...
$sql->execute();
$users = $sql->fetch(PDO::FETCH_ASSOC);
// --- on charge la vue
include "./views/layout.phtml";

?>
