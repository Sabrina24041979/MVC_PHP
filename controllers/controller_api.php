<?php
$db = connectDB();
$sql = $db->prepare("SELECT * FROM picture ORDER BY id DESC");
$sql->execute();
$pictures = $sql->fetchAll(PDO::FETCH_ASSOC);
header('content-type:application/json');
echo json_encode($pictures);
?>

<?php
$db = connectDB();
$sql = $db->prepare("SELECT * FROM users ORDER BY Id DESC");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);
header('content-type:application/json');
echo json_encode($users);
?>