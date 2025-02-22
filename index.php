<?php
// Controller
require "./app/explorePosts.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Miniblog</title>
    <link rel="stylesheet" href="./assets/style/home.css">
</head>
<body>
    <header>
        <a href="./" class="link">Posts</a>
        <a href="./posts/add" class="link">New Post</a>
    </header>

    <main>
        <h1>Posts</h1>
        <section class="wrapper">
            <?=$renderValues["posts"]?>
        </section>
    </main>
</body>
</html>