<?php 
    $current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="Site Logo"> 
    </div>
    <nav>
        <ul>
            <li class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">
                <a href="index.php">Home</a>
            </li>
            <li class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>">
                <a href="about.php">About</a>
            </li>
        </ul>
    </nav>
</header>
