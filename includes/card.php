<?php
// Usage: include 'includes/card.php'; echo renderCard($type, $data, $isLoggedIn);
// $type: 'genre', 'mood', 'album', 'playlist', 'artist'
// $data: associative array for the card
// $isLoggedIn: bool
function renderCard($type, $data, $isLoggedIn = false) {
    $imgClass = ($type === 'artist') ? 'genre-img darkmode-img rounded-circle mx-auto' : 'card-img-top '.(($type==='album'||$type==='playlist')?'release-img':'genre-img').' darkmode-img';
    $imgStyle = ($type === 'artist') ? 'width:90px;height:90px;object-fit:cover;' : '';
    $title = htmlspecialchars($data['name'] ?? $data['title'] ?? '');
    $desc = htmlspecialchars($data['desc'] ?? '');
    $img = htmlspecialchars($data['image'] ?? '');
    $alt = $title;
    $extra = '';
    $badges = '';
    switch($type) {
        case 'genre':
        case 'mood':
            $badges = '<span class="badge bg-secondary"><i class="bi bi-play-fill"></i> '.number_format($data['play_count']).'</span>';
            break;
        case 'album':
            $badges = '<span class="badge bg-secondary"><i class="bi bi-play-fill"></i> '.number_format($data['play_count']).'</span>';
            $badges .= '<span class="text-muted float-end"><i class="bi bi-clock"></i> '.htmlspecialchars($data['released']).'</span>';
            $extra = '<p class="card-text mb-1">by '.htmlspecialchars($data['artist']).'</p>';
            break;
        case 'playlist':
            $badges = '<span class="badge bg-secondary"><i class="bi bi-music-note-list"></i> '.($data['tracks']??'')." tracks</span>";
            $badges .= '<span class="badge bg-secondary ms-2"><i class="bi bi-play-fill"></i> '.number_format($data['play_count']).'</span>';
            break;
        case 'artist':
            $badges = '<span class="badge bg-secondary"><i class="bi bi-people-fill"></i> '.number_format($data['followers']).' followers</span>';
            break;
    }
    $addBtn = '';
    if ($isLoggedIn && in_array($type, ['album','playlist'])) {
        $addBtn = '<button class="btn btn-accent btn-sm mt-2 w-100 add-to-playlist" type="button" data-title="'.$title.'"><i class="bi bi-plus-circle"></i> Add to Playlist</button>';
    }
    return '<div class="card '.($type==='album'||$type==='playlist'?'card-release':'card-playlist').' interactive-card text-center py-3 px-2" tabindex="0" role="button" aria-label="'.$title.' '.$type.'" data-bs-toggle="modal" data-bs-target="#comingSoonModal">'
        .'<img src="'.$img.'" class="'.$imgClass.'" alt="'.$alt.'" style="'.$imgStyle.'" loading="lazy">'
        .'<div class="card-body p-2">'
        .'<span class="fw-bold d-block mb-1" style="color: var(--accent);'.($type==='artist'?'font-size:1.1em;':'').'">'.$title.'</span>'
        .($desc ? '<small class="text-muted d-block mb-1">'.$desc.'</small>' : '')
        .$extra
        .$badges
        .$addBtn
        .'</div>'
        .'</div>';
}
