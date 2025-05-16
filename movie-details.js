import { movies, series } from "./data.js"
// import { setupDatabase } from "./database/setup.js";


// Get the movie ID from the URL
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
const type = urlParams.get('type');


// Find the selected item (movie or series)
let selectedItem;
if (type === 'movie') {
    selectedItem = movies.find(m => m.id == id);
} else if (type === 'series') {
    selectedItem = series.find(s => s.id == id);
}

// Display the details
if (selectedItem) {
    document.getElementById('details-title').textContent = selectedItem.title;
    document.getElementById('details-image').src = selectedItem.image;
    document.getElementById('details-description').textContent = selectedItem.description;
    document.getElementById('trailer').src = selectedItem.trailerUrl;

}
else { document.getElementById('details-title').textContent = "Item not found"; }


// const connection = indexedDB.open('cinema-hub', 2)
//
// connection.onsuccess = async (event) => {
//     const database = event.target.result;
//     const transaction = database.transaction('history', 'readwrite');
//     const store = transaction.objectStore('history');
//
//     const username = localStorage.getItem("loggedInUserName")
//     if (username) {
//         store.add({ username, id, type });
//     }
// }
//
// connection.onupgradeneeded = (event) => {
//     const database = event.target.result;
//     setupDatabase(database);
// };
//
// connection.onerror = (event) => {
//     console.error('Error opening database:', event.target.error);
// }
