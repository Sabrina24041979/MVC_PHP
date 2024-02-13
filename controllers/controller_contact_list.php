<?php
$db = connectDB();

$sql = $db->prepare("SELECT * FROM users ORDER BY id DESC "); //DESC pour descendant. Pour avoir en haut les dernières données ajoutées.
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);

// --- la vue
include "./views/layout.phtml";