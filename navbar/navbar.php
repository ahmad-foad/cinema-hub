<?php

$isLoggedIn = isset($_SESSION['username']);

$userOrLogin = $isLoggedIn ?
    '<li class="nav-item"><a class="nav-link" id="user-link" href="profile.php"><i class="bx bxs-user-circle"></i></a></li>' :
    '<li class="nav-item"><a class="nav-link" id="login-link" href="login.html">Login</a></li>';

echo <<<TEXT
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/">Cinema Hub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/#movies">Movies</a></li>
              <li class="nav-item"><a class="nav-link" href="/#series">Series</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
              <li class="nav-item"><button class="nav-link" id="change-color"> 
                <i id="dark-icon" class="bx bxs-moon"></i>
                <i id="light-icon" class="bx bxs-sun"></i>
              </button></li>
              $userOrLogin  
            </ul>
          </div>
        </div>
      </nav>
TEXT;
//<script src="./navbar.js"></script>
