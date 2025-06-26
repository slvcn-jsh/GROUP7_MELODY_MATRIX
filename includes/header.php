<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundWave - Discover Your Sound</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    // Simulate authentication state globally
    if (!isset($isLoggedIn)) {
        session_start();
        $isLoggedIn = isset($_SESSION['user']);
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Melody Matrix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="browse.php">Browse</a></li>
                    <li class="nav-item"><a class="nav-link" href="playlist.php">Playlists</a></li>
                    <li class="nav-item"><a class="nav-link" href="artist.php">Artists</a></li>
                    <li class="nav-item"><a class="nav-link" href="player.php">Player</a></li>
                    <?php if ($isLoggedIn): ?>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                    <?php endif; ?>
                </ul>
                <button id="darkModeToggle" class="btn btn-outline-secondary ms-2" aria-label="Toggle dark mode"><i class="bi bi-moon"></i></button>
            </div>
        </div>
    </nav>
