<?php include 'includes/header.php'; ?>

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-4 mb-4" style="border-radius: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <img src="assets/images/album-cover.jpg" alt="Album Cover" class="img-fluid rounded" style="max-width: 180px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="mb-1" style="color: #d32f2f; font-weight: 700;">Midnight Dreams</h3>
                        <div class="mb-2">The Velvet Sound</div>
                        <div class="mb-2 text-muted">Alternative Rock • 2024</div>
                        <div class="d-flex align-items-center mb-3">
                            <button class="btn btn-accent me-2"><i class="bi bi-play-fill"></i> Play</button>
                            <button class="btn btn-outline-secondary me-2">Add to Playlist</button>
                            <button class="btn btn-outline-secondary me-2">Share</button>
                            <button class="btn btn-outline-secondary">Download</button>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>2:34</span>
                            <input type="range" class="form-range mx-2" min="0" max="252" value="154" style="flex:1;">
                            <span>4:12</span>
                        </div>
                        <div class="mt-2">
                            <label for="volume" class="form-label me-2">Volume</label>
                            <input type="range" class="form-range d-inline-block" id="volume" min="0" max="100" value="80" style="width: 120px; vertical-align: middle;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5 class="section-title">Recently Played</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Blue Moon <span class="text-muted">Jazz Collective</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4">
                    <h5 class="section-title">Up Next</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            City Lights <span class="text-muted">Metro Beats</span> <span>3:45</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Electric Nights <span class="text-muted">Neon Pulse Orchestra</span> <span>4:23</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sunset Boulevard <span class="text-muted">Urban Echo</span> <span>3:12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dancing Shadows <span class="text-muted">Crystal Wave</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
