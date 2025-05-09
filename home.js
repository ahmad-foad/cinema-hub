import { movies, series } from "./data.js"

function buildMovieCard(movie) {
    return `
                <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/horror-movie-poster-design-template-0a593d6547564a095f6166f10de24a4b_screen.jpg?ts=1679656233" class="card-img-top" alt="The Conjuring 3">
                    <div class="card-body">
                        <h5 class="card-title">${movie.title}</h5>
                        <a href="Movie.html?id=1&type=movie" class="btn btn-primary ">See Online</a>
                    </div>
                </div>
            </div>
            `
}

const horribleMoviesContainer = document.getElementById("horrible-movies")

const horribleMovies = movies.filter((movie) => {
    return movie.genre === "horrible"
})

horribleMoviesContainer.innerHTML = horribleMovies.map((movie) => {
    return buildMovieCard(movie)
}).join("\n")

// Add an event listener to all "See Online" buttons
document.querySelectorAll('.see-online').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the movie ID from the data-id attribute
        const movieId = this.getAttribute('data-id');

        // Redirect to the movie details page with the movie ID as a URL parameter
        window.location.href = `movie.html?id=${movieId}`;
    });
});
