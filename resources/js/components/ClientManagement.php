<!DOCTYPE html>

<template>
    <div>
        <h1>Client Management</h1>
        <form @submit.prevent="addClient">
            <input type="text" v-model="newClient.name" placeholder="Name" required>
            <input type="email" v-model="newClient.email" placeholder="Email" required>
            <input type="text" v-model="newClient.phone" placeholder="Phone" required>
            <button type="submit">Add Client</button>
        </form>

        <ul>
            <li v-for="client in clients" :key="client.id">
                {{ client.name }} - {{ client.email }} - {{ client.phone }}
                <button @click="editClient(client)">Edit</button>
                <button @click="deleteClient(client.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            clients: [],
            newClient: { name: '', email: '', phone: '' }
        };
    },
    mounted() {
        this.fetchClients();
    },
    methods: {
        fetchClients() {
            // Fetch clients from the backend API
            // Example: axios.get('/api/clients').then(response => this.clients = response.data);
        },
        addClient() {
            // Add client to the backend API
            // Example: axios.post('/api/clients', this.newClient).then(response => this.clients.push(response.data));
        },
        editClient(client) {
            // Implement editing logic
            console.log('Editing client:', client);
        },
        deleteClient(clientId) {
            // Delete client from the backend API
            // Example: axios.delete(`/api/clients/${clientId}`).then(() => this.clients = this.clients.filter(c => c.id !== clientId));
        }
    }
};
</script>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    margin-bottom: 20px;
}

form input {
    margin-bottom: 10px;
    padding: 5px;
    width: 200px;
}

form button {
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

li button {
    margin-left: 10px;
}
</style>
