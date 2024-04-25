<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management</title>
</head>
<body>
    <div id="app">
        <h1>Client Management</h1>
        <form @submit.prevent="addClient">
            <input type="text" v-model="newClient.name" placeholder="Name" required>
            <button type="submit">Add Client</button>
        </form>

        <ul>
            <li v-for="client in clients" :key="client.id">
                {{ client.name }}
                <button @click="editClient(client)">Edit</button>
                <button @click="deleteClient(client.id)">Delete</button>
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                clients: [],
                newClient: { name: '' }
            },
            mounted() {
                this.fetchClients();
            },
            methods: {
                fetchClients() {
                    axios.get('/api/clients')
                        .then(response => {
                            this.clients = response.data;
                        })
                        .catch(error => {
                            console.error('Error fetching clients:', error);
                        });
                },
                addClient() {
                    axios.post('/api/clients', this.newClient)
                        .then(response => {
                            this.clients.push(response.data);
                            this.newClient = { name: '', email: '', phone: '' };
                        })
                        .catch(error => {
                            console.error('Error adding client:', error);
                        });
                },
                editClient(client) {
                    // Implement editing logic
                    console.log('Editing client:', client);
                },
                deleteClient(clientId) {
                    axios.delete(`/api/clients/${clientId}`)
                        .then(() => {
                            this.clients = this.clients.filter(client => client.id !== clientId);
                        })
                        .catch(error => {
                            console.error('Error deleting client:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
