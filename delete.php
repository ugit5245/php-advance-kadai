<?php

try {

  $pdo = new PDO('mysql:dbname=zo4bh1av5z629yq;host=klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'yiqaon1ccnxq3ash', 'e80e8bgufl8c6hpb');

  $sql_delete = 'DELETE FROM products WHERE id=:id';

  $stmt_delete = $pdo->prepare($sql_delete);

  $stmt_delete->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

  $stmt_delete->execute();

  $count = $stmt_delete->rowCount();

  $message = "商品を{$count}件削除しました。";

  header("Location: read.php?message={$message}");
  
} catch (PDOException $e) {
  exit($e->getMessage());
}
