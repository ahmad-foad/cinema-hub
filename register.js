const registerForm = document.getElementById('register-form');

registerForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(registerForm);
  const data = Object.fromEntries(formData);

  console.log(data)

  const connection = indexedDB.open('auth', 1)

  connection.onsuccess = async (event) => {
    // save the user to the database
    const database = event.target.result;
    const transaction = database.transaction('users', 'readwrite');
    const store = transaction.objectStore('users');

    try {
      await store.add(data);
      alert('User registered successfully!');
      window.location.href = '/login.html';
    } catch (error) {
      if (error.name === 'ConstraintError') {
        alert('Username already exists. Please choose a different username.');
      } else {
        alert('Error adding user:\n' + error.message);
      }
    }
  }

  connection.onupgradeneeded = (event) => {
    const database = event.target.result;
    database.createObjectStore('users', { keyPath: 'username' });
  }

  connection.onerror = (event) => {
    console.error('Error opening database:', event.target.error);
  }

})

