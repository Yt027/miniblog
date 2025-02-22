<?php
// Controller
require "../../app/newPost.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Post</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../assets/style/addPost.css">
</head>

<body>
    <header>
        <a href="../../" class="link">Posts</a>
        <a href="./" class="link">New Post</a>
    </header>

    <form action="" method="post">
        <div class="field-box">
            <div class="input-field">
                <input type="text" name="name" id="name" placeholder="" required>
                <label for="name">Post Name</label>
            </div>
            <div class="input-field">
                <input type="text" name="author" id="author" placeholder="" required>
                <label for="author">Author Name</label>
            </div>
        </div>

        <div class="textarea-field">
            <textarea name="description" id="description" placeholder=""></textarea>
            <label for="description">Post Description</label>
        </div>

        <textarea name="content" id="content" style="display: none;"></textarea>
        <div class="editor">
            <div class="text" contenteditable="true" id="content-editor"></div>

            <div class="tools">
                <button type="button" class="btn" data-element="bold"><i class="fas fa-bold"></i></button>

                <button type="button" class="btn" data-element="italic"><i class="fas fa-italic"></i></button>

                <button type="button" class="btn" data-element="underline"><i class="fas fa-underline"></i></button>

                <button type="button" class="btn" data-element="insertUnorderedList"><i class="fas fa-list-ul"></i></button>

                <button type="button" class="btn" data-element="insertOrderedList"><i class="fas fa-list-ol"></i></button>

                <button type="button" class="btn" data-element="createLink"><i class="fas fa-link"></i></button>

                <button type="button" class="btn" data-element="justifyLeft"><i class="fas fa-align-left"></i></button>

                <button type="button" class="btn" data-element="justifyCenter"><i class="fas fa-align-center"></i></button>

                <button type="button" class="btn" data-element="justifyRight"><i class="fas fa-align-right"></i></button>

                <button type="button" class="btn" data-element="insertImage"><i class="fas fa-image"></i></button>
            </div>
            <span class="label">Post Content</span>
        </div>

        <button type="submit">Post</button>
    </form>

    <script src="../../assets/script/script.js"></script>
</body>

</html>