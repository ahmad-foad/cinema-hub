import { setupDatabase } from "./database/setup.js"

const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(loginForm);
    const data = Object.fromEntries(formData);

    const connection = indexedDB.open('cinema-hub', 2);

    connection.onsuccess = async (event) => {
        const database = event.target.result;
        const transaction = database.transaction('users', 'readonly');
        const store = transaction.objectStore('users');

        const request = store.get(data.username);

        request.onsuccess = (event) => {
            const user = event.target.result;
            if (user && user.password === data.password) {
                window.location.href = '/';
                localStorage.setItem('loggedInUserName', data.username);
            } else {
                alert('Invalid username or password.');
            }
        };

        request.onerror = (event) => {
            alert('Error retrieving user:', event.target.error);
        };
    };

    connection.onupgradeneeded = (event) => {
        const database = event.target.result;
        setupDatabase(database);
    };
})