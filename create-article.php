<?php
require 'config.php';

$message = '';
if (isset($_POST['title']) && isset($_POST['content'])) {
    $sql = 'INSERT INTO articles (title, content) VALUES (:title, :content)';
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':title' => $_POST['title'],
        ':content' => $_POST['content']
    ]);
    $message = 'Article added successfully';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
</head>
<body>
    <p><?php echo $message; ?></p>
    <form method="post">
        <input type="text" name="title" placeholder="Article Title"><br>
        <textarea name="content" placeholder="Article Content"></textarea><br>
        <button type="submit">Add Article</button>
    </form>
</body>
</html>
