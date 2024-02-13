<?php
$db = connectDB();

$sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC "); //DESC pour descendant. Pour avoir en haut les deniers éléments saisis. Les prdts les plus récents en avant.
$sql->execute();
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);

// --- la vue
include "./views/layout.phtml";
