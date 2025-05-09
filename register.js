const registerForm = document.getElementById('register-form');
const confirmPasswordInput = document.getElementById('confirmPassword');

confirmPasswordInput.addEventListener('change', () => {
  confirmPasswordInput.setCustomValidity('');
})

registerForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(registerForm);
  const data = Object.fromEntries(formData);

  if (data.password !== data.confirmPassword) {
    confirmPasswordInput.setCustomValidity('Passwords do not match');
    return;
  }


  const connection = indexedDB.open('auth', 1)

  connection.onsuccess = async (event) => {
    const database = event.target.result;
    const transaction = database.transaction('users', 'readwrite');
    const store = transaction.objectStore('users');

    const { firstName, lastName, username, password } = data;

    const addRequest = store.add({ firstName, lastName, username, password });

    addRequest.onsuccess = () => {
      alert('User registered successfully!');
      window.location.href = '/login.html';
    }

    addRequest.onerror = (event) => {
      if (event.target.error.name === 'ConstraintError') {
        alert('Username already exists. Please choose a different username.');
      } else {
        alert('Error adding user:\n' + error.message);
      }
    }
  }

  connection.onupgradeneeded = (event) => {
    const database = event.target.result;
    const store = database.createObjectStore('users', { keyPath: 'username' });
    store.createIndex('username', 'username', { unique: true });
  }

  connection.onerror = (event) => {
    console.error('Error opening database:', event.target.error);
  }

})

