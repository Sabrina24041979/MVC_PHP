<?php

// Si le formulaire d'inscription est validé on insert dans la table "users" - L'objectif est de pouvoir ajouter des nouvelles données depuis le formulaire sans passer par PhpMyAdmin. L'ajout dans BDD se fera en automatique.

if (isset($_POST['submit'])){
    $db = connectDB();
    $sql = $db->prepare("INSERT INTO users (name, firstname, email, password, passwordconf) VALUES (?,?,?,?,?)");
    $sql->execute([
        $_POST['name'],
        $_POST['firstname'],
        $_POST['mail'],
        $_POST['password'],
        $_POST['passwordconf']
    ]);

// Avec "Location"? on redirige sur LA PAGE contact.
    header("Location:?page=contact_list");
}


// --- on charge la vue
include "./views/layout.phtml";
?>