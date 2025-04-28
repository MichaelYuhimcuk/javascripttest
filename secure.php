<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php'); // Якщо ні — перенаправити на вхід
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Захищена сторінка</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .secure-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .secure-container h2 {
            color: #00796b;
            margin-bottom: 20px;
        }

        .secure-container p {
            font-size: 18px;
            color: #555555;
            margin-bottom: 30px;
        }

        .secure-container button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .secure-container button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="secure-container">
        <h2>Ласкаво просимо на захищену сторінку!</h2>
        <p>Ви успішно увійшли як <strong>myuser</strong>.</p>

        <form action="logout.php" method="post">
            <button type="submit">Вийти</button>
        </form>
    </div>
</body>
</html>
