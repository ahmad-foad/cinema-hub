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
  <link rel="stylesheet" href="./movie-details.css">
  <script src="./load-theme.js"></script>
</head>

<body>

<?php
  include 'navbar/navbar.php';
?>

  <section id="about-us" class="about-section container my-5">
    <h2>About Us</h2>
    <p>
      Welcome to <strong>Cinema Hub</strong> — your go-to destination for the best in movies and series.
      We are passionate movie enthusiasts dedicated to bringing you carefully curated content,
      from thrilling blockbusters to hidden indie gems. Whether you're looking for detailed movie information, trailers,
      or just want to discover something new,
      Cinema Hub is here to make your entertainment journey exciting and simple.
      Join our community and dive into the world of cinema like never before!.
    </p>
    <br>
    <h2>Created By </h2>
    <Ul>
      <li>Ahmed Fouad</li>
      <li>Shkar Salar</li>
      <li>Ahmed Sherzad</li>
      <br>
      group-B
    </Ul>
  </section>


</body>

</html>