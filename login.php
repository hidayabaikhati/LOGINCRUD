<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('p.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            text-align: center;
        }
        .login-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .login-container h2 {
            margin: 0 0 20px 0;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-container label,
        .login-container input {
            margin: 10px 0;
            width: 100%;
            max-width: 300px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #e8491d;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-container input[type="submit"]:hover {
            background: #333;
        }
        .message {
            margin: 10px 0;
            color: #ff6666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Form Login</h2>
        <?php
        if(isset($_GET['pesan'])){
            echo '<div class="message">';
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! Username dan password salah!";
            } else if($_GET['pesan'] == "logout"){
                echo "Anda Berhasil logout";
            } else if($_GET['pesan'] == "belum_login"){
                echo "Anda Harus Login Untuk Mengakses halaman admin";
            }
            echo '</div>';
        }
        ?>
        <form action="login_exe.php" method="POST">
            <label for="Username">Username:</label>
            <input type="text" id="Username" name="Username" placeholder="Username" required>
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" placeholder="Password" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
