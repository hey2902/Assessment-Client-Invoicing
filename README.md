# Boost-my-Bookings-assessment

# Client Management Application

This is a simple client management application built with Laravel.

## Getting Started

Here's how to run the application and documentation on the database schema and important aspects of the code:

### Running the Application:

To run the Laravel application, follow these steps:

1. **Clone the Repository**: Clone the repository containing the Laravel application code to your local machine.

   ```bash
   git clone <repository-url>
   ```

2. **Install Dependencies**: Navigate to the project directory and install the PHP dependencies using Composer.

   ```bash
   cd <project-directory>
   composer install
   ```

3. **Set Up Environment Variables**: Copy the `.env.example` file to `.env` and configure your environment variables such as the database connection settings.

   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**: Generate an application key using the `php artisan key:generate` command.

   ```bash
   php artisan key:generate
   ```

5. **Create Database Tables**: Run database migrations to create the necessary tables in the database.

   ```bash
   php artisan migrate
   ```

6. **Serve the Application**: You can serve the application using the built-in PHP server or any other web server of your choice.

   ```bash
   php artisan serve
   ```

   This will start a development server, and you can access the application by visiting `http://localhost:8000` in your web browser.

### Database Schema:

The database schema for the application consists of the following tables:

1. **clients**: Stores information about clients, including their name, email, and phone number.
   
   ```sql
   CREATE TABLE clients (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       phone VARCHAR(20) NOT NULL
   );
   ```

2. **properties**: Stores information about properties owned by clients, including their name, address, and rent.
   
   ```sql
   CREATE TABLE properties (
       id INT AUTO_INCREMENT PRIMARY KEY,
       client_id INT,
       name VARCHAR(255) NOT NULL,
       address VARCHAR(255) NOT NULL,
       rent DECIMAL(10, 2) NOT NULL,
       FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE
   );
   ```

3. **rooms**: Stores information about rooms within properties, including their number and rent.
   
   ```sql
   CREATE TABLE rooms (
       id INT AUTO_INCREMENT PRIMARY KEY,
       property_id INT,
       number VARCHAR(50) NOT NULL,
       rent DECIMAL(10, 2) NOT NULL,
       FOREIGN KEY (property_id) REFERENCES properties(id) ON DELETE CASCADE
   );
   ```

4. **units**: Stores information about units within rooms, including their number and rent.
   
   ```sql
   CREATE TABLE units (
       id INT AUTO_INCREMENT PRIMARY KEY,
       room_id INT,
       number VARCHAR(50) NOT NULL,
       rent DECIMAL(10, 2) NOT NULL,
       FOREIGN KEY (room_id) REFERENCES rooms(id) ON DELETE CASCADE
   );
   ```

### Important Aspects of the Code:

- **Controllers**: The application uses controllers to handle HTTP requests and interact with the database. Controllers are located in the `app/Http/Controllers` directory and contain methods for CRUD operations on clients.

- **Models**: Models represent database tables and are used to interact with the database. Models define relationships between tables and contain business logic. Models are located in the `app/Models` directory.

- **Routes**: Routes define the URLs that the application responds to and map them to controller methods. Routes are located in the `routes/web.php` file.

- **Views**: Views are HTML templates that are rendered by the application and sent to the client's web browser. Views contain the user interface elements of the application. Views are located in the `resources/views` directory.

- **Validation**: Form validation is implemented on the backend using Laravel's validation features. Validation rules are defined in the controller methods, and error messages are displayed to the user if validation fails.
