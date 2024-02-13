<?php

// Si le formulaire est validé on insert dans la table - L'objectif est de pouvoir ajouter des nouvelles données depuis le formulaire sans passer par PhpMyAdmin. L'ajout dans BDD se fera en automatique.

if (isset($_POST['submit'])){
    $db = connectDB();
    $sql = $db->prepare("INSERT INTO picture (title, description, src, author) VALUES (?,?,?,?)");
    $sql->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['src'],
        $_POST['author']
    ]);

// Avec "Location"? on redirige sur LA PAGE admin_list.
    header("Location:?page=admin_list");
}

// --- la vue
include "./views/layout.phtml";