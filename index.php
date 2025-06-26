<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Melody Matrix - Stream millions of songs, create playlists, and explore new music.">
  <meta name="keywords" content="music, streaming, playlists, artists, albums, genres, moods, listen, online">
  <meta name="author" content="Melody Matrix">
  <meta property="og:title" content="Melody Matrix - Discover Your Sound">
  <meta property="og:description" content="Stream millions of songs, create playlists, and explore new music.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og-image.jpg">
  <meta property="og:url" content="https://yourdomain.com/">
  <title>Melody Matrix - Discover Your Sound</title>
  <?php include 'includes/header.php'; ?>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <h1 class="hero-title">Discover Your Sound</h1>
    <p class="hero-subtitle">Stream millions of songs, create playlists, and explore new music</p>
    <form class="search-bar" method="get" action="search.php">
        <input type="text" class="form-control form-control-lg" name="q" placeholder="Search songs, artists, or playlists...">
    </form>
    <div class="mt-3">
        <a href="#" class="btn btn-accent me-2">Start Listening Free</a>
        <a href="#" class="btn btn-outline-secondary">Browse Music</a>
    </div>
</section>

<!-- Featured Playlists -->
<section class="container my-5">
    <h2 class="section-title">Featured Playlists</h2>
    <p>Curated collections for every mood and moment</p>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card card-playlist">
                <img src="assets/images/chill-vibes.jpg" class="card-img-top" alt="Chill Vibes">
                <div class="card-body">
                    <h5 class="card-title">Chill Vibes</h5>
                    <p class="card-text">Perfect for relaxing moments</p>
                    <span class="text-muted">2.3M plays</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist">
                <img src="assets/images/workout-hits.jpg" class="card-img-top" alt="Workout Hits">
                <div class="card-body">
                    <h5 class="card-title">Workout Hits</h5>
                    <p class="card-text">High energy for your gym sessions</p>
                    <span class="text-muted">956K plays</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist">
                <img src="assets/images/indie-favorites.jpg" class="card-img-top" alt="Indie Favorites">
                <div class="card-body">
                    <h5 class="card-title">Indie Favorites</h5>
                    <p class="card-text">Discover underground gems</p>
                    <span class="text-muted">742K plays</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist">
                <img src="assets/images/jazz-classics.jpg" class="card-img-top" alt="Jazz Classics">
                <div class="card-body">
                    <h5 class="card-title">Jazz Classics</h5>
                    <p class="card-text">Timeless jazz standards</p>
                    <span class="text-muted">1.8M plays</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Releases -->
<section class="container my-5">
    <h2 class="section-title">New Releases</h2>
    <p>Fresh tracks from your favorite artists</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card card-release">
                <img src="assets/images/midnight-dreams.jpg" class="card-img-top" alt="Midnight Dreams">
                <div class="card-body">
                    <h5 class="card-title">Midnight Dreams</h5>
                    <p class="card-text">by Luna Rodriguez</p>
                    <span class="text-muted">Released 2 days ago</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-release">
                <img src="assets/images/electric-nights.jpg" class="card-img-top" alt="Electric Nights">
                <div class="card-body">
                    <h5 class="card-title">Electric Nights</h5>
                    <p class="card-text">by DJ Phoenix</p>
                    <span class="text-muted">Released 1 week ago</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-release">
                <img src="assets/images/mountain-songs.jpg" class="card-img-top" alt="Mountain Songs">
                <div class="card-body">
                    <h5 class="card-title">Mountain Songs</h5>
                    <p class="card-text">by The Wanderers</p>
                    <span class="text-muted">Released 3 days ago</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="container my-5 text-center">
    <h3>Ready to Start Your Musical Journey?</h3>
    <p>Join millions of music lovers and discover your next favorite song</p>
    <a href="#" class="btn btn-accent me-2">Get Started Free</a>
    <a href="#" class="btn btn-outline-secondary">Learn More</a>
</section>

<!-- Stats -->
<section class="container my-5 text-center">
    <div class="row">
        <div class="col">
            <h4>50M+ Songs</h4>
        </div>
        <div class="col">
            <h4>10M+ Users</h4>
        </div>
        <div class="col">
            <h4>Any Device</h4>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
