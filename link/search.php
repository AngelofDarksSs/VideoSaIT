<?php
// Listă simplă de anime-uri — poți înlocui cu o interogare dintr-o bază de date
$animeList = [
    "Jujutsu Kaisen" => "link/jujutsu-kaisen.php",
    "Solo Leveling" => "link/solo-leveling.php",
    "One Piece" => "link/one-piece.php",
    "Attack on Titan" => "#",
    "Naruto" => "#",
    "Demon Slayer" => "#",
    "Death Note" => "#"
];

if (isset($_GET['q'])) {
    $query = strtolower(trim($_GET['q']));
    $results = [];

    foreach ($animeList as $title => $url) {
        if (strpos(strtolower($title), $query) !== false) {
            $results[] = "<a href='$url'>" . htmlspecialchars($title) . "</a>";
        }
    }

    if (!empty($results)) {
        echo implode("<br>", $results);
    } else {
        echo "<p style='color: #ccc;'>Niciun rezultat găsit.</p>";
    }
}
?>
