<?php include 'includes/header.php'; ?>

<section class="container my-5">
    <div class="row">
        <!-- Sidebar: My Playlists -->
        <aside class="col-md-3 mb-4">
            <h5 class="mb-3" style="color: #d32f2f; font-weight: 700;">My Playlists</h5>
            <button class="btn btn-accent w-100 mb-3">Create Playlist</button>
            <ul class="list-group mb-4">
                <li class="list-group-item">Chill Vibes</li>
                <li class="list-group-item">Workout Energy</li>
                <li class="list-group-item">Indie Folk</li>
                <li class="list-group-item">Late Night Jazz</li>
                <li class="list-group-item">Summer Hits</li>
            </ul>
        </aside>
        <!-- Main Playlist Content -->
        <main class="col-md-9">
            <div class="d-flex align-items-center mb-4">
                <img src="assets/images/chill-vibes.jpg" alt="Playlist Cover" class="rounded me-4" style="width: 120px; height: 120px; object-fit: cover;">
                <div>
                    <h2 class="mb-1" style="color: #d32f2f; font-weight: 700;">Chill Vibes</h2>
                    <div class="mb-1">Your perfect mix for relaxing moments</div>
                    <div class="mb-2 text-muted">Created by You &bull; 24 songs &bull; 1h 32m</div>
                    <button class="btn btn-accent">Play</button>
                </div>
            </div>
            <div class="table-responsive mb-5">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Album</th>
                            <th>Artist</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Midnight Dreams</td>
                            <td>Nocturnal</td>
                            <td>Luna Martinez</td>
                            <td>3:42</td>
                            <td><button class="btn btn-outline-secondary btn-sm">&#9733;</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ocean Waves</td>
                            <td>Serenity</td>
                            <td>Alex Rivers</td>
                            <td>4:15</td>
                            <td><button class="btn btn-outline-secondary btn-sm">&#9733;</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Starlight Serenade</td>
                            <td>Cosmos</td>
                            <td>Maya Chen</td>
                            <td>3:28</td>
                            <td><button class="btn btn-outline-secondary btn-sm">&#9733;</button></td>
                        </tr>
                        <!-- ...more songs... -->
                    </tbody>
                </table>
            </div>
            <h5 class="mb-3" style="color: #d32f2f; font-weight: 700;">Your Other Playlists</h5>
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card card-playlist text-center p-3">
                        <div class="fw-bold">Workout Energy</div>
                        <div class="text-muted">18 songs &bull; 1h 12m</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-playlist text-center p-3">
                        <div class="fw-bold">Indie Folk</div>
                        <div class="text-muted">32 songs &bull; 2h 8m</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-playlist text-center p-3">
                        <div class="fw-bold">Late Night Jazz</div>
                        <div class="text-muted">15 songs &bull; 58m</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-playlist text-center p-3">
                        <div class="fw-bold">Summer Hits</div>
                        <div class="text-muted">28 songs &bull; 1h 45m</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
