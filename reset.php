<?php
$dsn = 'mysql:dbname=LAA0574800-appserverone;host=mysql149.phy.lolipop.lan';
$user = 'LAA0574800';
$password = 'sora20200809';

//$dsn = 'mysql:dbname=app_one_server;host=localhost';
//$user = 'root';
//$password = '';

try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}

$sql = 'TRUNCATE TABLE reports';
$dbh->exec($sql);

echo json_encode(['result'=>true]);