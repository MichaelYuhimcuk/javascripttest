<?php
$name = $age = $gender = $description = "";
$hobbies = array();
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    $name = isset($_POST["name"]) ? clean_input($_POST["name"]) : "";
    if (empty($name)) {
        $errors["name"] = "Ім’я обов'язкове.";
    }

    $age = isset($_POST["age"]) ? clean_input($_POST["age"]) : "";
    if (!is_numeric($age) || $age < 10 || $age > 100) {
        $errors["age"] = "Вік має бути числом від 10 до 100.";
    }

    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    if ($gender != "Чоловік" && $gender != "Жінка") {
        $errors["gender"] = "Оберіть стать.";
    }

    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : array();
    $description = isset($_POST["description"]) ? clean_input($_POST["description"]) : "";

    if (empty($errors)) {
        echo '<!DOCTYPE html>
        <html lang="uk">
        <head>
            <meta charset="UTF-8">
            <title>Ваші дані</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f2f2f2;
                    padding: 20px;
                }
                .container {
                    background-color: white;
                    padding: 20px;
                    max-width: 500px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    margin: auto;
                }
                h2 {
                    text-align: center;
                }
                .field {
                    margin-bottom: 10px;
                }
                .label {
                    font-weight: bold;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Ваші дані</h2>
                <div class="field"><span class="label">Ім’я:</span> ' . $name . '</div>
                <div class="field"><span class="label">Вік:</span> ' . $age . '</div>
                <div class="field"><span class="label">Стать:</span> ' . $gender . '</div>
                <div class="field"><span class="label">Хобі:</span> ' . (!empty($hobbies) ? implode(", ", $hobbies) : "Немає") . '</div>
                <div class="field"><span class="label">Опис:</span> ' . $description . '</div>
            </div>
        </body>
        </html>';
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета користувача</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        form {
            background-color: white;
            padding: 20px;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Анкета користувача</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Ім’я:
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <span class="error"><?php echo isset($errors["name"]) ? $errors["name"] : ""; ?></span>
        </label>

        <label>Вік:
            <input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>">
            <span class="error"><?php echo isset($errors["age"]) ? $errors["age"] : ""; ?></span>
        </label>

        <label>Стать:</label>
        <label><input type="radio" name="gender" value="Чоловік" <?php if ($gender == "Чоловік") echo "checked"; ?>> Чоловік</label>
        <label><input type="radio" name="gender" value="Жінка" <?php if ($gender == "Жінка") echo "checked"; ?>> Жінка</label>
        <span class="error"><?php echo isset($errors["gender"]) ? $errors["gender"] : ""; ?></span>

        <label>Хобі:</label>
        <label><input type="checkbox" name="hobbies[]" value="Ігри" <?php if (in_array("Ігри", $hobbies)) echo "checked"; ?>> Ігри</label>
        <label><input type="checkbox" name="hobbies[]" value="Спорт" <?php if (in_array("Спорт", $hobbies)) echo "checked"; ?>> Спорт</label>
        <label><input type="checkbox" name="hobbies[]" value="Музика" <?php if (in_array("Музика", $hobbies)) echo "checked"; ?>> Музика</label>
        <label><input type="checkbox" name="hobbies[]" value="Малювання" <?php if (in_array("Малювання", $hobbies)) echo "checked"; ?>> Малювання</label>

        <label>Короткий опис:
            <textarea name="description"><?php echo htmlspecialchars($description); ?></textarea>
        </label>

        <input type="submit" value="Надіслати">
    </form>
</body>
</html>
