<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            max-width: 800px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Client Management System</h1>
        
        <!-- Add Client Form -->
        <div class="card">
            <div class="card-header">
                Add Client
            </div>
            <div class="card-body">
                <form action="/clients" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="properties">Properties:</label>
                        <input type="number" class="form-control" id="properties" name="properties" required>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Rooms:</label>
                        <input type="number" class="form-control" id="rooms" name="rooms" required>
                    </div>
                    <div class="form-group">
                        <label for="units">Units:</label>
                        <input type="number" class="form-control" id="units" name="units" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Client</button>
                </form>
            </div>
        </div>

        <!-- Client List -->
        <div class="card">
            <div class="card-header">
                Client List
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Properties</th>
                            <th>Rooms</th>
                            <th>Units</th>
                            <th>Monthly Payment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Client data will be dynamically populated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
