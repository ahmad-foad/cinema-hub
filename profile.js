const fullUserNameElement = document.getElementById("full-user-name")
const usernameElement = document.getElementById("username")
const logoutButton = document.getElementById("logout-button")

const userName = localStorage.getItem("loggedInUserName")

if (!userName) {
    window.location.href = "/login.html"
}

const connection = indexedDB.open('cinema-hub', 1);

connection.onsuccess = async (event) => {
    const database = event.target.result;
    const transaction = database.transaction('users', 'readonly');
    const store = transaction.objectStore('users');

    const request = store.get(userName);

    request.onsuccess = (event) => {
        const user = event.target.result;
        if (user) {
            fullUserNameElement.innerText = user.firstName + " " + user.lastName
            usernameElement.innerText = `@${user.username}`
        } else {
            window.location.href = "/login.html"

        }
    };

    request.onerror = (event) => {
        window.location.href = "/login.html"
    };
};

connection.onupgradeneeded = (event) => {
    const database = event.target.result;
    setupDatabase(database);
};

logoutButton.addEventListener("click", () => {
    localStorage.removeItem("loggedInUserName")
    window.location.href = "/login.html"
})