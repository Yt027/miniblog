<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the "name" and "author" fields are set and not empty
    if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["author"]) && !empty($_POST["author"])) {
        // Escape user inputs to prevent XSS attacks
        $postName = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
        $authorName = htmlspecialchars($_POST["author"], ENT_QUOTES, 'UTF-8');
        $postDescription = htmlspecialchars($_POST["description"], ENT_QUOTES, 'UTF-8');
        $postContent = $_POST["content"];
        $postDate = date("H:i - d, M, Y");

        // HTML content of the post
        $content = "
            <!DOCTYPE html>
            <html lang='en'>

            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>$postName</title>
                <link rel='stylesheet' href='../assets/style/single.css'>
            </head>

            <body>
                <header>
                    <a href='../' class='link'>Posts</a>
                    <a href='./add' class='link'>New Post</a>
                </header>

                <main>
                    <aside class='description'>
                        <p><strong>Author: </strong>$authorName</p>
                        <p><strong>Publication Date: </strong>$postDate</p>
                        <p><strong>Description: </strong>$postDescription</p>
                    </aside>

                    <section>
                        <h1>$postName</h1>
                        <div class='content'>
                            $postContent
                        </div>
                    </section>
                </main>
            </body>

            </html>
        ";

        // Generate a unique filename for the post
        $filename = str_replace(" ", "-", $postName); // Replace spaces with hyphens
        $filename = trim($filename); // Remove leading and trailing spaces
        $filename = mb_convert_case($filename, MB_CASE_LOWER); // Convert the string to lowercase

        // Check if a file with the same name already exists
        if (file_exists("../../posts/$filename.html")) {
            $filename .= "-" . bin2hex(random_bytes(16)); // Generate a secure unique identifier
        }

        // Retrieve the posts.json file
        $postsFilePath = "../../app/posts.json";
        if (file_exists($postsFilePath)) {
            $posts = file_get_contents($postsFilePath);
            $posts = json_decode($posts, true);
        } else {
            $posts = [];
        }

        // Add the new post to the posts array
        $posts[] = [
            "author" => $authorName,
            "name" => $postName,
            "description" => $postDescription,
            "date" => $postDate,
            "link" => $filename
        ];

        // Write the posts array to the posts.json file
        if (file_put_contents($postsFilePath, json_encode($posts)) === false) {
            // Handle error
            die("Error writing to posts.json");
        }

        // Write Post HTML content in $filename.html
        if (file_put_contents("../../posts/$filename.html", $content) === false) {
            // Gère l'erreur
            die("Error writing the post file");
        }

        // Redirect user to new created post
        header("Location: ../../posts/$filename.html");
    }
}
?>
