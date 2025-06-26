<?php include 'includes/header.php'; ?>

<!-- Hero Banner -->
<div class="artist-hero position-relative" style="background: url('assets/images/artist-hero.jpg') center/cover no-repeat; min-height: 320px;">
    <div class="container h-100 d-flex flex-column justify-content-end pb-4">
        <h1 class="display-4 fw-bold text-white" style="text-shadow: 0 2px 16px rgba(0,0,0,0.5);">Artist Name</h1>
    </div>
</div>

<section class="container my-5">
    <div class="row align-items-center mb-4">
        <div class="col-md-8">
            <p class="lead mb-2">Short biography about the artist goes here. This section describes the artist's style, background, and achievements.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <button class="btn btn-accent me-2"><i class="bi bi-person-plus"></i> Follow</button>
            <a href="#" class="text-muted me-2" aria-label="Facebook"><i class="bi bi-facebook fs-4"></i></a>
            <a href="#" class="text-muted me-2" aria-label="Instagram"><i class="bi bi-instagram fs-4"></i></a>
            <a href="#" class="text-muted me-2" aria-label="Twitter"><i class="bi bi-twitter fs-4"></i></a>
            <a href="#" class="text-muted" aria-label="YouTube"><i class="bi bi-youtube fs-4"></i></a>
        </div>
    </div>

    <h3 class="section-title mb-3">Top Songs</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <div class="card card-release p-3 d-flex flex-row align-items-center">
                <button class="btn btn-accent btn-sm me-3"><i class="bi bi-play-fill"></i></button>
                <div>
                    <div class="fw-bold">Song Title 1</div>
                    <div class="text-muted small">3:42</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-release p-3 d-flex flex-row align-items-center">
                <button class="btn btn-accent btn-sm me-3"><i class="bi bi-play-fill"></i></button>
                <div>
                    <div class="fw-bold">Song Title 2</div>
                    <div class="text-muted small">3:28</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-release p-3 d-flex flex-row align-items-center">
                <button class="btn btn-accent btn-sm me-3"><i class="bi bi-play-fill"></i></button>
                <div>
                    <div class="fw-bold">Song Title 3</div>
                    <div class="text-muted small">4:03</div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="section-title mb-3">Albums</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/album1.jpg" class="card-img-top mb-2" alt="Album 1">
                <div class="fw-bold">Album 1</div>
                <div class="text-muted small">2024</div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/album2.jpg" class="card-img-top mb-2" alt="Album 2">
                <div class="fw-bold">Album 2</div>
                <div class="text-muted small">2023</div>
            </div>
        </div>
        <!-- ...more albums... -->
    </div>

    <h3 class="section-title mb-3">Playlists</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/playlist1.jpg" class="card-img-top mb-2" alt="Playlist 1">
                <div class="fw-bold">Playlist 1</div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/playlist2.jpg" class="card-img-top mb-2" alt="Playlist 2">
                <div class="fw-bold">Playlist 2</div>
            </div>
        </div>
        <!-- ...more playlists... -->
    </div>

    <h3 class="section-title mb-3">Upcoming Events</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
        <div class="col">
            <div class="card card-release p-3">
                <div class="fw-bold">Date 1</div>
                <div class="text-muted">Venue 1</div>
            </div>
        </div>
        <div class="col">
            <div class="card card-release p-3">
                <div class="fw-bold">Date 2</div>
                <div class="text-muted">Venue 2</div>
            </div>
        </div>
    </div>

    <h3 class="section-title mb-3">Related Artists</h3>
    <div class="row row-cols-2 row-cols-md-4 g-3">
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/related-artist1.jpg" class="card-img-top mb-2 rounded-circle" alt="Related Artist 1" style="width: 80px; height: 80px; object-fit: cover; margin: 0 auto;">
                <div class="fw-bold">Related Artist 1</div>
            </div>
        </div>
        <div class="col">
            <div class="card card-playlist text-center p-3">
                <img src="assets/images/related-artist2.jpg" class="card-img-top mb-2 rounded-circle" alt="Related Artist 2" style="width: 80px; height: 80px; object-fit: cover; margin: 0 auto;">
                <div class="fw-bold">Related Artist 2</div>
            </div>
        </div>
        <!-- ...more related artists... -->
    </div>
</section>

<?php include 'includes/footer.php'; ?>
