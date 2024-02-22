<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        <?php
        // Get list of blog post files
        $blogFiles = glob("blogs/*.php");

        // Loop through each file and display link to the blog post
        foreach ($blogFiles as $file) {
            echo "<li><a href=\"$file\">" . basename($file, ".php") . "</a></li>";
        }
        ?>
    </ul>
</body>
</html>
