<?php
$users = [
    ['name' => 'Богдан', 'age' => 25, 'email' => 'bohdan@gmail.com'],
    ['name' => 'Павло', 'age' => 17, 'email' => 'pablo@gmail.com'],
    ['name' => 'Джусик', 'age' => 30, 'email' => 'dzycik@gmail.com'],
    ['name' => 'Колбун', 'age' => 22, 'email' => 'kojbyn@gmail.com'],
    ['name' => 'Петро', 'age' => 19, 'email' => 'petro@gmail.com'],
    ['name' => 'Гліб', 'age' => 16, 'email' => 'rjib@gmail.com'],
    ['name' => 'Пламетюк', 'age' => 27, 'email' => 'njametyk@gmail.com'],
    ['name' => 'Редчук', 'age' => 21, 'email' => 'petzyk@gmail.com'],
    ['name' => 'Максим', 'age' => 23, 'email' => 'maksym@gmail.com'],
    ['name' => 'Рома', 'age' => 18, 'email' => 'poma@gmail.com'],
];

function filterAdults($user) {
    return $user['age'] >= 18;
}

$adultUsers = array_filter($users, 'filterAdults');

function compareByNameLength($a, $b) {
    return strlen($a['name']) - strlen($b['name']);
}

usort($adultUsers, 'compareByNameLength');

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Користувачі</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Ім’я</th>
            <th>Вік</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adultUsers as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
