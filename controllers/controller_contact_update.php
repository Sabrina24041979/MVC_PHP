<?php
$db = connectDB();
// on récupère l'id depuis l'url
// on la convertit en entier pour être plus prudent...
$id = intval( $_GET['Id'] );
$sql = $db->prepare("SELECT * FROM users WHERE Id='".$id."'");
$sql->execute();
// LE FETCH TOUT COURT NE RETOURNE QU'UN SEUL ARRAY PLAT
$user = $sql->fetch(PDO::FETCH_ASSOC);
// Si le formulaire est validé on update dans la table
// Sans oublier de préciser l'id
if (isset($_POST['submit'])){
    $sql = $db->prepare("UPDATE users SET name=?, firstName=?, mail=?, password=?, passwordConf=? WHERE Id=?");
    $sql->execute([
        $_POST['name'],
        $_POST['firstName'],
        $_POST['mail'],
        $_POST['password'],
        $_POST['passwordConf'],
        date('Y-m-d H:i:s'), // on peut directement utiliser l'objet DateTime de PHP natif
        $id
    ]);
    // Et on redirige sur l'adminlist
    header("Location:?page=contact_list");
}

// --- la vue
include "./views/layout.phtml";