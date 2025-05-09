export function setupDatabase(database) {
    const store = database.createObjectStore('users', { keyPath: 'username' });
    store.createIndex('username', 'username', { unique: true });
}