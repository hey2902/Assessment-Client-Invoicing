<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
</head>
<body>
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('clientForm').addEventListener('submit', function(event) {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;

                if (!name || !email || !phone) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please fill in all fields.');
                }

                // You can add more specific validation rules here, like email format validation

                // If all validation passes, the form will be submitted as usual
            });
        });
    </script>
</body>
</html>
