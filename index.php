<?php
require 'config.php';

$sql = 'SELECT * FROM articles';
$statement = $pdo->query($sql);
$articles = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CMS</title>
</head>
<body>
    <?php foreach ($articles as $article): ?>
        <h2><?php echo $article['title']; ?></h2>
        <p><?php echo $article['content']; ?></p>
    <?php endforeach; ?>
</body>
</html>
