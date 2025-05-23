<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Website</title>
    <link rel="icon" href="./images/discord.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./load-theme.js"></script>
    <link rel="stylesheet" href="image-slider.css">
    <link rel="stylesheet" href="movie-details.css">

    <style>
        :root {
            --color-bg: #0D1B2A;
            --color-text: #E0E1DD;
        }

        .light:root {

            --color-bg: #dadada;
            --color-text: #0D1B2A;
        }

        html,
        body {
            background-color: var(--color-bg);
            color: var(--color-text);
            font-family: 'Arial', sans-serif;
        }






        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-top: 40px;
            text-align: center;
            color: var(--color-text);
            text-transform: uppercase;
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
    
    <!-- Bootstrap Carousel (Image slider between navbar and movies) -->
    <!-- <div id="cinemaCarousel" class="carousel slide mt-3" data-bs-ride="carousel" data-bs-interval="4000"
        data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#cinemaCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#cinemaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#cinemaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#cinemaCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://beam-images.warnermediacdn.com/BEAM_LWM_DELIVERABLES/3fc82165-2aac-4983-ae3d-f42677d80df9/7b9bc966-1fd6-4c99-b4ec-11eb68602013?host=wbd-images.prod-vod.h264.io&partner=beamcom&w=500-1bARfvvvKo2aox-5SjVRKyWeX9SaZNYTgAhMZIfTPAqGI4E1aWkqPKIDsU"
                    class="d-block w-100" alt="Slide 1" style="height: 630px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/b8/8b/df/b88bdf3995f0f952c1822da7ffe5bbdf.jpg" class="d-block w-100"
                    alt="Slide 2" style="height: 630px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/f8/0d/63/f80d638f6a29bec93a87a81c1963d596.jpg" class="d-block w-100"
                    alt="Slide 3" style="height: 630px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://aesthetix.pk/cdn/shop/products/WhatsAppImage2022-10-22at1.19.04PM.jpg?v=1686755537"
                    class="d-block w-100" alt="Slide 4" style="height: 630px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cinemaCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cinemaCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <div class="image-slider">

        <div class="slide">

            <div class="item"
                style="background-image: url(https://m.media-amazon.com/images/S/pv-target-images/46799804c749513ac16cd56981a29f01e35006b8a34bd7e27484de97365f874e._SX1080_FMjpg_.jpg);">
                <div class="content">
                    <div class="name">
                        <h3>The Walking Dead</h3>
                    </div>
                    <a href="Movie.php?id=2&type=series" class="btn btn-primary">See Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(https://images2.alphacoders.com/114/1144782.jpg);">
                <div class="content">
                    <div class="name">
                        <h3>Lord Of The Rings</h3>
                    </div>
                    <a href="Movie.php?id=17&type=movie" class="btn btn-primary">See Now</a>
                </div>
            </div>
            <div class="item"
                style="background-image: url(https://w0.peakpx.com/wallpaper/360/36/HD-wallpaper-tv-show-better-call-saul-thumbnail.jpg);">
                <div class="content">
                    <div class="name">
                        <h3>Better Call Saul</h3>
                    </div>
                    <a href="Movie.php?id=6&type=series" class="btn btn-primary">See Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(https://i.ytimg.com/vi/r1XnnPQ6EkE/sddefault.jpg);">
                <div class="content">
                    <div class="name">
                        <h3>The Conjuring 3</h3>
                    </div>
                    <a href="Movie.php?id=1&type=movie" class="btn btn-primary">See Now</a>

                </div>
            </div>
            <div class="item"
                style="background-image: url(https://cdn1.epicgames.com/offer/8b2f4c9ee4e74d05b801565de8fd4500/EGS_TheExpanseATelltaleSeries_DeckNine_S1_2560x1440-5708ef472e393756d0144065d2c77422?resize=1&w=480&h=270&quality=medium);">
                <div class="content">
                    <div class="name">
                        <h3>The Expanse</h3>
                    </div>
                    <a href="Movie.php?id=19&type=series" class="btn btn-primary">See Now</a>
                </div>
            </div>
            <div class="item"
                style="background-image: url(https://popcult.blog/wp-content/uploads/2022/11/good-bad-ugly-banner.png);">
                <div class="content">
                    <div class="name">
                        <h3>The Good,The Bad and The Ugly</h3>
                    </div>
                    <a href="Movie.php?id=6&type=movie" class="btn btn-primary">See Now</a>
                </div>
            </div>

        </div>

        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left">⬅️</i></button>
            <button class="next"><i class="fa-solid fa-arrow-right">➡️</i></button>
        </div>

    </div>

    <div class="container" style="margin-top: 100vh;">

        <h2 id="movies" class="section-title">Movies</h2>

        <h3 class="section-title">Horrible Movies</h3>
        <div class="row card-container">
            <!-- Movie 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://w0.peakpx.com/wallpaper/913/387/HD-wallpaper-the-conjuring-3-james-wan-the-conjuring-thumbnail.jpg"
                        class="card-img-top" alt="The Conjuring 3">
                    <div class="card-body">
                        <h5 class="card-title">The Conjuring 3</h5>
                        <a href="Movie.php?id=1&type=movie" class="btn btn-primary ">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/8VnOaJFPXG8/maxresdefault.jpg" class="card-img-top"
                        alt="Horror Movie 2">
                    <div class="card-body">
                        <h5 class="card-title">Alien</h5>
                        <a href="Movie.php?id=2&type=movie" class="btn btn-primary">See Online</a>

                    </div>
                </div>
            </div>
            <!-- Movie 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/S/pv-target-images/ade34bfecb72aa7aa1ed127ad07cb025ce2434683e794258398e72931650eb98.jpg"
                        class="card-img-top" alt="Horror Movie 3">
                    <div class="card-body">
                        <h5 class="card-title">Friend Request</h5>
                        <a href="Movie.php?id=3&type=movie" class="btn btn-primary ">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://resizing.flixster.com/tuVwiMU5kDChSopPvFpgUJCIPuI=/fit-in/352x330/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p14298430_v_h9_aa.jpg"
                        class="card-img-top" alt="Horror Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">TERRIFIER</h5>
                        <a href="Movie.php?id=4&type=movie" class="btn btn-primary ">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 5 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://iheardthebookwasbetter2.wordpress.com/wp-content/uploads/2017/02/the-visit.jpg"
                        class="card-img-top" alt="Horror Movie 5">
                    <div class="card-body">
                        <h5 class="card-title">The Visit</h5>
                        <a href="Movie.php?id=5&type=movie" class="btn btn-primary ">See Online</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="section-title">Criminality Movies</h3>
        <div class="row card-container">
            <!-- Movie 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://www.thegardencinema.co.uk/wp-content/uploads/films/The-Godfather-Part-II-742x1024.jpg"
                        class="card-img-top" alt="The God Father">
                    <div class="card-body">
                        <h5 class="card-title">The God Father II</h5>
                        <a href="Movie.php?id=11&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://pbs.twimg.com/media/Fw6VTdmXgAELdEx.jpg:large" class="card-img-top"
                        alt="Criminal Movie 2">
                    <div class="card-body">
                        <h5 class="card-title">Se7en</h5>
                        <a href="Movie.php?id=12&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7SWs707DaPCm7xG4gKIHyXMfq9zOKOgFxzA&s"
                        class="card-img-top" alt="Criminal Movie 3">
                    <div class="card-body">
                        <h5 class="card-title">Trap</h5>
                        <a href="Movie.php?id=13&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://www.mauvais-genres.com/18484-thickbox_default/don-t-breathe-movie-poster-15x21-in-2016-fede-alvarez-evil-dead-director-.jpg"
                        class="card-img-top" alt="Criminal Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">Don`t Breath</h5>
                        <a href="Movie.php?id=14&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 5 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy0BJBY1bCQViu2BAGv7Snnsz1Xca6XMbQyg&s"
                        class="card-img-top" alt="Criminal Movie 5">
                    <div class="card-body">
                        <h5 class="card-title">I See You</h5>
                        <a href="Movie.php?id=15&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="section-title">Western Movies</h3>
        <div class="row card-container">
            <!-- Movie 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://w0.peakpx.com/wallpaper/314/738/HD-wallpaper-the-good-the-bad-the-ugly-1966-clint-eastwood-movie-film-1966-classic-the-good-the-bad-and-the-ugly-western-thumbnail.jpg"
                        class="card-img-top" alt="Western Movie 1">
                    <div class="card-body">
                        <h5 class="card-title">The Good , The Bad And The Ugly</h5>
                        <a href="Movie.php?id=6&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://wallpapercave.com/wp/wp5705834.jpg" class="card-img-top" alt="Western Movie 2">
                    <div class="card-body">
                        <h5 class="card-title">For A Few Dollars More</h5>
                        <a href="Movie.php?id=7&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://sothebys-md.brightspotcdn.com/dims4/default/110e80e/2147483647/strip/true/crop/2000x1512+0+0/resize/385x291!/quality/90/?url=http%3A%2F%2Fsothebys-brightspot.s3.amazonaws.com%2Fmedia-desk%2Fbd%2F0b%2Ffee10f67494b95636c4d0334f23f%2F260l20895-bj7yj.jpg"
                        class="card-img-top" alt="Western Movie 3">
                    <div class="card-body">
                        <h5 class="card-title">A Fisful Of Dollars</h5>
                        <a href="Movie.php?id=8&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/M/MV5BYWVlN2EyNjgtZmUyYS00NTk0LThkZTctYWJhNTdmMzc4MTEzXkEyXkFqcGc@._V1_.jpg"
                        class="card-img-top" alt="Western Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">The Great Silence</h5>
                        <a href="Movie.php?id=9&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 5 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/UFoCCUhEs_M/maxresdefault.jpg" class="card-img-top"
                        alt="Western Movie 5">
                    <div class="card-body">
                        <h5 class="card-title">Sanctified</h5>
                        <a href="Movie.php?id=10&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="section-title">Action Movies</h3>
        <div class="row card-container">
            <!-- Movie 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/514zBLkyJcL.jpg" class="card-img-top"
                        alt="Scientific Movie 1">
                    <div class="card-body">
                        <h5 class="card-title">Interstellar</h5>
                        <a href="Movie.php?id=16&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://www.originalposter.co.uk/uploads/171764552593232_mainphotos.jpg"
                        class="card-img-top" alt="Scientific Movie 2">
                    <div class="card-body">
                        <h5 class="card-title">The Lord of the Rings:<h6>The Fellowship of the Ring</h6>
                        </h5>
                        <a href="Movie.php?id=17&type=movie" class="btn btn-primary">See Now</a>
                    </div>
                </div>
            </div>
            <!-- Movie 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxoizjC1WdcbPYnzIypj0hflUYm5eldY-Xkw&s"
                        class="card-img-top" alt="Scientific Movie 3">
                    <div class="card-body">
                        <h5 class="card-title">Deadpool & Wolverine</h5>
                        <a href="Movie.php?id=18&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://www.vintagemovieposters.co.uk/wp-content/uploads/2015/01/IMG_5848.jpeg"
                        class="card-img-top" alt="Scientific Movie 4">
                    <div class="card-body">
                        <h5 class="card-title">The Dark Night</h5>
                        <a href="Movie.php?id=19&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Movie 5 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://i.etsystatic.com/17257718/r/il/adc110/2428396175/il_fullxfull.2428396175_pra7.jpg"
                        class="card-img-top" alt="Scientific Movie 5">
                    <div class="card-body">
                        <h5 class="card-title">Inception</h5>
                        <a href="Movie.php?id=20&type=movie" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 id="series" class="section-title mt-5">Series</h1>

        <h3 class="section-title">Horrible Series</h3>
        <div class="row card-container">
            <!-- Series 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://fr.web.img6.acsta.net/img/7f/5b/7f5b275c23162a85b46befa8bba36176.jpg"
                        class="card-img-top" alt="Horror Series 1">
                    <div class="card-body">
                        <h5 class="card-title">From</h5>
                        <a href="Movie.php?id=1&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://wallpapersok.com/images/thumbnail/fear-the-walking-dead-season-1-poster-sq7ycuadngbtdafo.jpg"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Fear the Walking Dead</h5>
                        <a href="Movie.php?id=2&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://dawnofthelead.com/wp-content/uploads/2012/10/image_twd_poster1.jpg?w=405&h=303"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">The Walking Dead</h5>
                        <a href="Movie.php?id=3&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/uOFT_4SozJA/maxresdefault.jpg" class="card-img-top"
                        alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">The Walking Dead: Daryl Dixon</h5>
                        <a href="Movie.php?id=4&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>

        </div>
        <h3 class="section-title">Criminality Series</h3>
        <div class="row card-container">
            <!-- Series 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://ih1.redbubble.net/image.5264183368.5628/raf,360x360,075,t,fafafa:ca443f4786.jpg"
                        class="card-img-top" alt="Horror Series 1">
                    <div class="card-body">
                        <h5 class="card-title"> Breaking Bad</h5>
                        <a href="Movie.php?id=5&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://ih1.redbubble.net/image.4601026530.6524/flat,750x,075,f-pad,750x1000,f8f8f8.jpg"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Better Call Saul</h5>
                        <a href="Movie.php?id=6&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://w0.peakpx.com/wallpaper/24/744/HD-wallpaper-dexter-season-6-6-awesome-dexter-showtime-season-thumbnail.jpg"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Dexter</h5>
                        <a href="Movie.php?id=7&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <!-- Series 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://resizing.flixster.com/jzy4EE179l92PUGYLAzqdCQ3iAw=/fit-in/352x330/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p23660225_b_v4_aa.jpg"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Blood Ties</h5>
                        <a href="Movie.php?id=8&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://wallpapersok.com/images/thumbnail/fargo-series-character-25fqi1r88g0l7zav.webp"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Fargo</h5>
                        <a href="Movie.php?id=9&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/ymSKZt-hNlY/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLARdMOrNm4Zeqwd-nXOu-VarJSHAA"
                        class="card-img-top" alt="Horror Series 2">
                    <div class="card-body">
                        <h5 class="card-title">Rogue Justice</h5>
                        <a href="Movie.php?id=10&type=series" class="btn btn-primary">See Online</a>
                    </div>
                </div>
            </div>

            <h3 class="section-title">Action Series</h3>
            <div class="row card-container">
                <!-- Series 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://w0.peakpx.com/wallpaper/978/682/HD-wallpaper-24-live-another-day-cool-tv-series-entertainment-fun-24-thumbnail.jpg"
                            class="card-img-top" alt="Horror Series 1">
                        <div class="card-body">
                            <h5 class="card-title">24</h5>
                            <a href="Movie.php?id=11&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <!-- Series 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZZqCxEsf9q8MDL907N94a3HHa4DSLdZZrWA&s"
                            class="card-img-top" alt="Horror Series 2">
                        <div class="card-body">
                            <h5 class="card-title">Prison Break</h5>
                            <a href="Movie.php?id=12&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <!-- Series 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p14716114_b_v8_af.jpg"
                            class="card-img-top" alt="Horror Series 2">
                        <div class="card-body">
                            <h5 class="card-title">The Punisher</h5>
                            <a href="Movie.php?id=13&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://m.media-amazon.com/images/M/MV5BNjRlNjNlY2YtYzQxNS00ZTUzLTkwMTQtMjM0YjZlOWQwZmFkXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                            class="card-img-top" alt="Horror Series 2">
                        <div class="card-body">
                            <h5 class="card-title">Arrow</h5>
                            <a href="Movie.php?id=14&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://ih1.redbubble.net/image.5103823533.0253/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg"
                            class="card-img-top" alt="Horror Series 2">
                        <div class="card-body">
                            <h5 class="card-title">Banshee</h5>
                            <a href="Movie.php?id=15&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://m.media-amazon.com/images/I/71LGGcQHzqL._AC_UF894,1000_QL80_.jpg"
                            class="card-img-top" alt="Horror Series 2">
                        <div class="card-body">
                            <h5 class="card-title">Reacher</h5>
                            <a href="Movie.php?id=16&type=series" class="btn btn-primary">See Online</a>
                        </div>
                    </div>
                </div>
                <h3 class="section-title">Scientific Series</h3>
                <div class="row card-container">
                    <!-- Series 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://static.next-episode.net/tv-shows-images/huge/black-mirror.jpg"
                                class="card-img-top" alt="Horror Series 1">
                            <div class="card-body">
                                <h5 class="card-title">Black Mirror</h5>
                                <a href="Movie.php?id=17&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>
                    <!-- Series 2 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://w0.peakpx.com/wallpaper/665/253/HD-wallpaper-fringe-american-tv-series-thumbnail.jpg"
                                class="card-img-top" alt="Horror Series 2">
                            <div class="card-body">
                                <h5 class="card-title">Fringe</h5>
                                <a href="Movie.php?id=18&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>
                    <!-- Series 3 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://cdn1.epicgames.com/offer/8b2f4c9ee4e74d05b801565de8fd4500/EGS_TheExpanseATelltaleSeries_DeckNine_S1_2560x1440-5708ef472e393756d0144065d2c77422?resize=1&w=480&h=270&quality=medium"
                                class="card-img-top" alt="Horror Series 2">
                            <div class="card-body">
                                <h5 class="card-title">The Expanse</h5>
                                <a href="Movie.php?id=19&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJZAtQJO9q-b2Zy1R8Z-YjCG76ila7It-NUA&s"
                                class="card-img-top" alt="Horror Series 2">
                            <div class="card-body">
                                <h5 class="card-title">Westworld</h5>
                                <a href="Movie.php?id=20&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://resizing.flixster.com/QUfdsJpdYumP3vbRnFfNlzmgKL8=/fit-in/352x330/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p8808512_b_h9_ab.jpg"
                                class="card-img-top" alt="Horror Series 2">
                            <div class="card-body">
                                <h5 class="card-title">Person of Interest</h5>
                                <a href="Movie.php?id=21&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://resizing.flixster.com/5ECXIaMPa_MzNxZhsj9ycLPEWtI=/fit-in/352x330/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p17334711_b_v10_aa.jpg"
                                class="card-img-top" alt="Horror Series 2">
                            <div class="card-body">
                                <h5 class="card-title">Devs</h5>
                                <a href="Movie.php?id=22&type=series" class="btn btn-primary">See Online</a>
                            </div>
                        </div>
                    </div>



                    <!-- Contact Section -->
                    <section id="contact" class="contact-section">
                        <h2>Contact</h2>
                        <div class="contact-icons">
                            <a href="https://discord.com/invite/@fcahmad" target="_blank">
                                <img src="./images/discord.svg" alt="Discord Logo">
                                Discord
                            </a>
                            <a href="mailto:youremail@example.com">
                                <img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" alt="Email Logo">
                                Email
                            </a>
                            <a href="https://t.me/ahmed_foad" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg"
                                    alt="Telegram Logo">
                                Telegram
                            </a>
                        </div>
                    </section>



                    <script src="./image-slider.js"></script>

</body>


</html>