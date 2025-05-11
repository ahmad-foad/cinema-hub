export function setupDatabase(database) {
    if (!database.objectStoreNames.contains('users')) {
        const usersStore = database.createObjectStore('users', { keyPath: 'username' });
        usersStore.createIndex('username', 'username', { unique: true });
    }

    if (!database.objectStoreNames.contains('history')) {
        const historyStore = database.createObjectStore('history', { autoIncrement: true });
    }
}