import { movies, series } from "./data.js"
import { setupDatabase } from "./database/setup.js"

const fullUserNameElement = document.getElementById("full-user-name")
const usernameElement = document.getElementById("username")
const logoutButton = document.getElementById("logout-button")
const historyContainerElement = document.getElementById("history-container")

const userName = localStorage.getItem("loggedInUserName")

if (!userName) {
    window.location.href = "/login.html"
}

const connection = indexedDB.open('cinema-hub', 2);


connection.onsuccess = async (event) => {
    const database = event.target.result;
    const usersTransaction = database.transaction('users', 'readonly');
    const usersStore = usersTransaction.objectStore('users');

    const historyTransaction = database.transaction('history', 'readonly');
    const historyStore = historyTransaction.objectStore('history');

    const userDetailRequest = usersStore.get(userName);
    const allHistoryRequest = historyStore.getAll();

    userDetailRequest.onsuccess = (event) => {
        const user = event.target.result;
        if (user) {
            fullUserNameElement.innerText = user.firstName + " " + user.lastName
            usernameElement.innerText = `@${user.username}`
        } else {
            window.location.href = "/login.html"

        }
    };

    userDetailRequest.onerror = (event) => {
        window.location.href = "/login.html"
    };

    allHistoryRequest.onsuccess = (event) => {
        const historyArray = event.target.result;
        console.log(historyArray)
        if (Array.isArray(historyArray)) {
            const historyCards = historyArray.map((history) => {
                let selectedItem;
                if (history.type === 'movie') {
                    selectedItem = movies.find(m => m.id == history.id);
                } else if (history.type === 'series') {
                    selectedItem = series.find(s => s.id == history.id);
                }

                return `
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="${selectedItem.image}" class="card-img-top"
                                    alt="${selectedItem.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${selectedItem.title}</h5>
                                    <a href="Movie.html?id=${history.id}&type=${history.type}" class="btn btn-primary">See Online</a>
                                </div>
                            </div>
                        </div>
            `
            })

            historyCards.reverse()


            historyContainerElement.innerHTML = historyCards.join("\n");
        }
    };
};

connection.onupgradeneeded = (event) => {
    const database = event.target.result;
    setupDatabase(database);
};

connection.onerror = (event) => {
    console.error('Error opening database:', event.target.error);
}

logoutButton.addEventListener("click", () => {
    localStorage.removeItem("loggedInUserName")
    window.location.href = "/login.html"
})