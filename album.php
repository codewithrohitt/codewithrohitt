<?php
// album.php

// Function to create a new album
function createAlbum($albumName) {
    // Create a new directory for the album
    $albumPath = "albums/" . $albumName;
    if (!file_exists($albumPath)) {
        mkdir($albumPath);
        echo "Album created successfully!";
    } else {
        echo "Album already exists!";
    }
}

// Function to upload a photo to an album
function uploadPhoto($albumName, $photo) {
    // Check if the album exists
    $albumPath = "albums/" . $albumName;
    if (file_exists($albumPath)) {
        // Move the uploaded photo to the album directory
        $targetPath = $albumPath . "/" . basename($photo["name"]);
        move_uploaded_file($photo["tmp_name"], $targetPath);
        echo "Photo uploaded successfully!";
    } else {
        echo "Album does not exist!";
    }
}

// Function to display albums in a gallery
function displayAlbums() {
    // Get a list of all albums
    $albums = glob("albums/*", GLOB_ONLYDIR);
    
    // Display each album as a link in the gallery
    foreach ($albums as $album) {
        $albumName = basename($album);
        echo "<a href='view_album.php?album=$albumName'>$albumName</a><br>";
    }
}

// Usage examples
$action = $_GET["action"] ?? "";
$albumName = $_POST["album_name"] ?? "";
$photo = $_FILES["photo"] ?? "";

if ($action === "create_album") {
    createAlbum($albumName);
} elseif ($action === "upload_photo") {
    uploadPhoto($albumName, $photo);
} elseif ($action === "display_albums") {
    displayAlbums();
}
?>