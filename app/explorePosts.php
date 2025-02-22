<?php
// Initialize the array of values to render
$renderValues = [
    "posts" => ""
];

// Retrieve the content of the posts.json file
$posts = file_get_contents("./app/posts.json");
$posts = json_decode($posts);

// Reverse the array to display the posts from the most recent to the oldest
$posts = array_reverse($posts);

foreach ($posts as $key => $post) {
    // Retrieve the information of the posts stored in posts.json
    $name = $post->name;
    $author = $post->author;
    $description = $post->description;
    $date = $post->date;
    $link = $post->link;

    // Insert the information into the links
    $renderValues["posts"] .= "
        <a href='./posts/$link.html' class='post'>
            <h3 class='name'>$name</h3>
            <h4 class='author'>$author</h4>
            <p class='date'>$date</p>
            <p class='description'>
                $description
            </p>
        </a>
    ";
}
?>