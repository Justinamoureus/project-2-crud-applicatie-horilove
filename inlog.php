
<?php include 'databaseconnect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container" style="width:500px; margin-top: 50px;">
        <h3 class="mb-3">Login</h3>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-3">
            <p>Geen Account? <a href="register.php">Maak er een!</a>.</p>
        </div>
    </div>

</body>
</html>
