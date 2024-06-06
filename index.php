<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['Username'])) {
    header("location:../login.php?pesan=belum_login");
    exit();
}

$Username = $_SESSION['Username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #main-header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77d42a 3px solid;
        }
        #main-header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            font-size: 24px;
        }
        #main-footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        .welcome {
            margin: 30px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .welcome h2 {
            margin: 0;
            font-size: 36px;
            color: #fff;
        }
        .welcome p {
            font-size: 18px;
            color: #ccc;
        }
        .logout-btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #e8491d;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: #333;
        }
        .thank-you {
            margin-top: 20px;
            font-size: 24px;
            color: #fff;
        }
        .welcome img {
            margin-top: 20px;
            max-width: 150px; /* Adjust the size as needed */
        }
    </style>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <h1>Dashboard</h1>
        </div>
    </header>

    <div class="container">
        <div class="welcome">
            <h2>Selamat Datang, <?php echo $Username; ?>!</h2>
            <img src="op.jpg" alt="Logo">
            <p>Anda telah berhasil login ke sistem.</p>
            <a href="logout.php" class="logout-btn">Logout</a>
            <div class="thank-you">
                <p>Terima kasih telah login.</p>
            </div>
        </div>
    </div>

    <footer id="main-footer">
        <p>Dashboard hidaya &copy; 2024</p>
    </footer>
</body>
</html>
