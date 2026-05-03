
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <style>
        .error { 
            color: red; 
        }
        .success { 
            color: green; 
        }
    </style>
</head>
<body> 
    <h2>Signup Form</h2>
    <div id="response"></div>
    <form method="post" onsubmit="return signup()" enctype="multipart/form-data">
        Username:   <input type="text" id="username" name="username" value=""/> <br>
        Password:   <input type="password" id="password" name="password" value=""/> <br>
        Email:      <input type="email" id="email" name="email" value=""/> <br>
                    <input type="submit" name="submit" value="Submit"/>
                    <a href="login.php">Sign in</a>
    </form>

    <script src="../controller/register.js"></script>
        
</body>
</html>