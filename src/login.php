<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<html>
    <body>
    <div class="container">
        <form action="register.php" method="post">
            <h1>Login to our platform</h1>
            <h5>Login and start ordering</h5>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <button type="submit" value="login" name="submit">Login</button>
            </div>
            <div class="form-group">
                <p>Don't have an account? <a href="register.php">Login</a></p>
            </div>
        </form>
    </div>
</html>