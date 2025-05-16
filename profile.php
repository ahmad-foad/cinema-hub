<?php
session_start();
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

            .profile-section {
                margin-top: 40px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .logout-button {
                background-color: #a63111;
                color: #E0E1DD;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 18px;
                display: flex;
                align-items: center;
                gap: 8px
            }

            .logout-button i {
                font-size: 22px;
            }

            .history-section {
                margin-top: 10vh;
                display: flex;
                flex-direction: column;
                gap: 40px;
            }

            .card-container {
                margin-top: 20px;

            }

            .card {
                background-color: var(--color-bg);
                color: var(--color-text);
                border-radius: 10px;
                overflow: hidden;
                transition: transform 0.3s ease-in;
                box-shadow: 0 0 10px rgba(27, 152, 224, 0.5);
            }

            .card:hover {
                transform: scale(1.05);
            }

            .card-img-top {
                object-fit: cover;
                height: 250px;
            }

            .card-body {
                padding: 20px;
            }

            .card-title {
                font-size: 1.3rem;
                font-weight: bold;
            }

            .btn-primary {
                background-color: #1B98E0;
                border: none;
            }

            .btn-primary:hover {
                background-color: #1565C0;
            }

        </style>
    </head>

    <body>
    <?php
    include 'navbar/navbar.php';
    ?>

        <div class="profile-section">
            <i class='bx bxs-user-circle' style="font-size: 120px;"></i>
            <h1 id="full-user-name"></h1>
            <h6 id="username"></h6>

            <button class="logout-button" id="logout-button">Logout
                <i class='bx bx-log-out'></i>
            </button>
        </div>

        <section class="history-section container">
            <h2>History</h2>
            <div id="history-container" class="row card-container ">
            </div>
        </section>

        <script src="./profile.js" type="module"></script>
    </body>

</html>
