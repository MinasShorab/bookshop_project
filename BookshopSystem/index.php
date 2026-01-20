<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshop Login</title>

    <style>
        body {
             font-family: sans-serif;
             display: flex; justify-content: center;
              align-items: center;
               height: 100vh;
                background-color: #f0f0f0;
             }
        
        .login-container {
             background: white;
              padding: 20px;
               border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                 width: 300px;
                 }
        
        input[type="text"], input[type="password"] {
             width: 100%;
              padding: 10px;
               margin: 10px 0;
                box-sizing: border-box;
             }
        
        button {
             width: 100%;
              padding: 10px;
               background-color: #007bff;
                color: white; border: none;
                 cursor: pointer; 
                }
        
        button:hover {
             background-color: #0056b3; 
            }
        
        .error {
             color: red;
              font-size: 0.9em;
               margin-bottom: 10px; 
            }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <?php
    if (isset($_GET['error'])) {
        echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
    <div style="margin-top: 15px; text-align: center;">
        <a href="signup.php" style="text-decoration: none;
         color: #007bff;
          font-size: 0.9em;">Create new account</a>
    </div>
</div>

</body>
</html>
