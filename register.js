// import { setupDatabase } from "./database/setup.js"

const registerForm = document.getElementById('register-form');
const confirmPasswordInput = document.getElementById('confirmPassword');

confirmPasswordInput.addEventListener('change', () => {
  confirmPasswordInput.setCustomValidity('');
})

registerForm.addEventListener('submit', async (event) => {


  const formData = new FormData(registerForm);
  const data = Object.fromEntries(formData);

  if (data.password !== data.confirmPassword) {
    confirmPasswordInput.setCustomValidity('Passwords do not match');
    event.preventDefault();
  }

  // const connection = indexedDB.open('cinema-hub', 2)

  // connection.onsuccess = async (event) => {
  //   const database = event.target.result;
  //   const transaction = database.transaction('users', 'readwrite');
  //   const store = transaction.objectStore('users');

  //   const { firstName, lastName, username, password } = data;

  //   const addRequest = store.add({ firstName, lastName, username, password });

  //   addRequest.onsuccess = () => {
  //     alert('User registered successfully!');
  //     window.location.href = '/login.html';
  //   }

  //   addRequest.onerror = (event) => {
  //     if (event.target.error.name === 'ConstraintError') {
  //       alert('Username already exists. Please choose a different username.');
  //     } else {
  //       alert('Error adding user:\n' + error.message);
  //     }
  //   }
  // }

  // connection.onupgradeneeded = (event) => {
  //   const database = event.target.result;
  //   setupDatabase(database);
  // };

  // connection.onerror = (event) => {
  //   console.error('Error opening database:', event.target.error);
  // }

})

