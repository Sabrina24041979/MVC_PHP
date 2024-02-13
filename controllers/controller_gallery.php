<?php
$db = connectDB();
$sql = $db->prepare("SELECT * FROM picture");
$sql->execute();
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
$info = "Ceci est la galerie...";
// --- on charge la vue
include "./views/layout.phtml";