<?php
// save_content.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the content from the POST request
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    // Define the directory where you want to save the file
    $directory = 'saved_files';

    // Check if the directory exists, if not create it
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    // Define the file path and name
    $filePath = $directory . '/content.txt';

    // Save the content to the file
    file_put_contents($filePath, $content);

    // Return a response
    echo 'Content saved successfully!';
}
?>
