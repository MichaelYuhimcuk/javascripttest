<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: secure.php');
    exit();
}

if (isset($_COOKIE['blocked'])) {
    header('Location: blocked.php');
    exit();
}

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === 'manager' && $password === 'securepass') {
        $_SESSION['loggedin'] = true;
        unset($_SESSION['attempts']);
        header('Location: secure.php');
        exit();
    } else {
        $_SESSION['attempts']++;

        if ($_SESSION['attempts'] >= 3) {
            setcookie('blocked', 'true', time() + 300, '/'); // Блокуємо на 5 хв
            session_destroy();
            header('Location: blocked.php');
            exit();
        } else {
            $error = 'Невірний логін або пароль. Спроб: ' . $_SESSION['attempts'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вхід</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-container input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .login-container button {
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Форма входу</h2>

        <?php if (!empty($error)) { ?>
            <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
        <?php } ?>

        <form method="post" action="login.php">
            <label>Логін:</label>
            <input type="text" name="username" required>

            <label>Пароль:</label>
            <input type="password" name="password" required>

            <button type="submit">Увійти</button>
        </form>
    </div>
</body>
</html>
