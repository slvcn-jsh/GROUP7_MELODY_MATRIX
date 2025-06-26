<?php include 'includes/header.php'; ?>

<section class="container my-5">
    <div class="row mb-4 align-items-center">
        <div class="col-auto">
            <img src="assets/images/profile-pic.jpg" alt="Profile Picture" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        <div class="col">
            <h2 class="mb-1" style="color: #d32f2f; font-weight: 700;">Username</h2>
            <div class="mb-2 text-muted">user@email.com</div>
            <button class="btn btn-outline-secondary me-2">Edit Profile</button>
            <button class="btn btn-accent">Logout</button>
        </div>
    </div>
    <div class="mb-5">
        <h4 class="section-title">Created Playlists</h4>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card card-playlist text-center p-3">
                    <div class="fw-bold">Chill Vibes</div>
                    <div class="text-muted">24 songs</div>
                </div>
            </div>
            <div class="col">
                <div class="card card-playlist text-center p-3">
                    <div class="fw-bold">Workout Energy</div>
                    <div class="text-muted">18 songs</div>
                </div>
            </div>
            <div class="col">
                <div class="card card-playlist text-center p-3">
                    <div class="fw-bold">Indie Folk</div>
                    <div class="text-muted">32 songs</div>
                </div>
            </div>
            <div class="col">
                <div class="card card-playlist text-center p-3">
                    <div class="fw-bold">Late Night Jazz</div>
                    <div class="text-muted">15 songs</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <h4 class="section-title">Liked Songs</h4>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card card-release text-center p-3">
                    <div class="fw-bold">Midnight Dreams</div>
                    <div class="text-muted">Luna Martinez</div>
                </div>
            </div>
            <div class="col">
                <div class="card card-release text-center p-3">
                    <div class="fw-bold">Ocean Waves</div>
                    <div class="text-muted">Alex Rivers</div>
                </div>
            </div>
            <!-- ...more liked songs... -->
        </div>
    </div>
    <div>
        <h4 class="section-title">Recently Played</h4>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card card-release text-center p-3">
                    <div class="fw-bold">Blue Moon</div>
                    <div class="text-muted">Jazz Collective</div>
                </div>
            </div>
            <div class="col">
                <div class="card card-release text-center p-3">
                    <div class="fw-bold">City Lights</div>
                    <div class="text-muted">Metro Beats</div>
                </div>
            </div>
            <!-- ...more recently played... -->
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
