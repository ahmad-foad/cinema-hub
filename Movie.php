<?php
session_start();

$userId = $_SESSION['user_id'];
$movieType = $_GET['type'];
$movieId = $_GET['id'];

if (isset($movieType) && isset($movieId)) {
    $pdo = new PDO('sqlite:database/cinema-hub.db');

    $statement = $pdo->prepare("INSERT INTO history (user_id, movie_type, movie_id) VALUES (?, ?, ?)");

    $statement->execute([
        $userId,
        $movieType,
        $movieId
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="movie-details.css">
    <script src="./load-theme.js"></script>
    <style>
        :root {
            --color-bg: #0D1B2A;
            --color-text: #E0E1DD;
        }

        .light:root {

            --color-bg: #dadada;
            --color-text: #0D1B2A;
        }


        .contact-section {
            background-color: rgb(59, 71, 85);
            padding: 40px 0;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<?php
include 'navbar/navbar.php';
?>

<!-- Details Section -->
<div class="container details-section">
    <div><br>
        <h1 id="details-title">Details Title</h1><br>
        <p id="details-description">Details Description</p>
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/h9Q4zZS2v1k?si=4W1SYV3YAUGrMsGj"
                id="trailer"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <img id="details-image" src="" alt="Details Image" class="details-image">
</div>
</div>
<section id="contact" class="contact-section">
    <h2>Contact</h2>
    <div class="contact-icons">
        <a href="./images/discord.svg" target="_blank">
            <img src="./images/discord.svg" alt="Discord Logo">
            Discord
        </a>
        <a href="mailto:youremail@example.com">
            <img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" alt="Email Logo">
            Email
        </a>
        <a href="https://t.me/yourtelegramlink" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram Logo">
            Telegram
        </a>
    </div>
</section>

<script type="module" src="./movie-details.js"></script>

</body>

</html>