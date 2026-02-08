<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <title>Form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2>Enter Your Information</h2>
        
        <!-- The form sends data to a PHP script -->
        <form action="/submit" method="POST">
            @csrf

            <label for="username">Username:</label>
            <img src="" alt="Zazu bengong"><br>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>
