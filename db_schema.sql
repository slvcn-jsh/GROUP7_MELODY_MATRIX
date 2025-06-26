-- Melody Matrix Database Schema

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    image VARCHAR(255),
    description VARCHAR(255),
    play_count INT DEFAULT 0
);

CREATE TABLE moods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    image VARCHAR(255),
    description VARCHAR(255),
    play_count INT DEFAULT 0
);

CREATE TABLE artists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    bio TEXT,
    followers INT DEFAULT 0
);

CREATE TABLE albums (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    artist_id INT,
    genre_id INT,
    image VARCHAR(255),
    description VARCHAR(255),
    release_date DATE,
    play_count INT DEFAULT 0,
    FOREIGN KEY (artist_id) REFERENCES artists(id),
    FOREIGN KEY (genre_id) REFERENCES genres(id)
);

CREATE TABLE tracks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    album_id INT,
    artist_id INT,
    genre_id INT,
    mood_id INT,
    file_path VARCHAR(255),
    duration INT,
    play_count INT DEFAULT 0,
    FOREIGN KEY (album_id) REFERENCES albums(id),
    FOREIGN KEY (artist_id) REFERENCES artists(id),
    FOREIGN KEY (genre_id) REFERENCES genres(id),
    FOREIGN KEY (mood_id) REFERENCES moods(id)
);

CREATE TABLE playlists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE playlist_tracks (
    playlist_id INT,
    track_id INT,
    track_order INT,
    PRIMARY KEY (playlist_id, track_id),
    FOREIGN KEY (playlist_id) REFERENCES playlists(id),
    FOREIGN KEY (track_id) REFERENCES tracks(id)
);
