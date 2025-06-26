<?php
include 'includes/header.php';
include 'includes/card.php';
require_once 'config/db.php';
require_once 'models/Genre.php';
require_once 'models/Mood.php';
require_once 'models/Album.php';
require_once 'models/Playlist.php';
require_once 'models/Artist.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php" aria-label="Home">
        <i class="bi bi-house-door-fill" style="font-size:1.1em;vertical-align:-0.1em;"></i>
      </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page" style="color: var(--accent); font-weight: 700;">Browse</li>
  </ol>
</nav>
<section class="container my-5">
    <h2 class="section-title mb-3">Browse Music</h2>
    <form class="mb-4" method="get" action="search.php">
        <input type="text" class="form-control form-control-lg" name="q" placeholder="Search music by song, artist, or album...">
    </form>
    <?php
    // Fetch genres and moods from the database
    $genres = Genre::getAll($pdo);
    $moods = Mood::getAll($pdo);
    ?>
    <div class="mb-5">
        <h4 class="mb-3" style="color: var(--accent); font-weight: 700;">Genres</h4>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <?php foreach($genres as $genre): ?>
            <div class="col">
              <?php echo renderCard('genre', $genre, $isLoggedIn); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="mb-5">
        <h4 class="mb-3" style="color: var(--accent); font-weight: 700;">Moods</h4>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <?php foreach($moods as $mood): ?>
            <div class="col">
              <?php echo renderCard('mood', $mood, $isLoggedIn); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div>
        <h4 class="mb-3" style="color: var(--accent); font-weight: 700;">New Releases</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $albums = Album::getAll($pdo);
            foreach($albums as $album): ?>
            <div class="col">
                <?php echo renderCard('album', $album, $isLoggedIn); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div>
        <h4 class="mb-3" style="color: var(--accent); font-weight: 700;">Featured Playlists</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <?php
            $playlists = Playlist::getAll($pdo);
            foreach($playlists as $playlist): ?>
            <div class="col">
                <?php echo renderCard('playlist', $playlist, $isLoggedIn); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <h4 class="mb-3" style="color: var(--accent); font-weight: 700;">Featured Artists</h4>
        <div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
            <?php
            $artists = Artist::getAll($pdo);
            foreach($artists as $artist): ?>
            <div class="col">
                <?php echo renderCard('artist', $artist, $isLoggedIn); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Coming Soon Modal -->
<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white border-0">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="comingSoonLabel"><i class="bi bi-info-circle-fill me-2" style="color: var(--accent);"></i>Coming Soon!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        This feature is coming soon. Stay tuned for updates!
      </div>
    </div>
  </div>
</div>
<!-- Toast Container for notifications -->
<div class="toast-container position-fixed top-0 end-0 p-3" id="toastContainer"></div>
<?php include 'includes/footer.php'; ?>
<script>
// Add focus/keyboard accessibility for cards
const cards = document.querySelectorAll('.interactive-card');
cards.forEach(card => {
  card.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      card.click();
    }
  });
  // Add to playlist button (if present)
  card.querySelectorAll('.add-to-playlist').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      showToast('Added "' + btn.getAttribute('data-title') + '" to your playlist!');
    });
  });
});
// Toast notification logic
function showToast(message) {
  const toastContainer = document.getElementById('toastContainer');
  const toast = document.createElement('div');
  toast.className = 'toast align-items-center show';
  toast.setAttribute('role', 'alert');
  toast.setAttribute('aria-live', 'assertive');
  toast.setAttribute('aria-atomic', 'true');
  toast.innerHTML = `<div class="d-flex p-2"><span><i class="bi bi-check-circle-fill"></i> ${message}</span><button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>`;
  toastContainer.appendChild(toast);
  setTimeout(() => { toast.classList.remove('show'); toast.remove(); }, 2500);
}
</script>
