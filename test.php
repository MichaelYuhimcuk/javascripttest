<?php
$name = "Микола";
$age = "25";
$is_student = "програмуванням";
$numbers = range(1,5);
$sum = array_sum($numbers);
$user = [
    "name" => "Юхимчук Микола",
    "email" => "weqwt1234@gmail.com",
    "phone" => "+380123456789"
];
$grade = 70;
echo "Мене звати {$name}, мені {$age} років і я займаюся {$is_student}.";
echo "<strong>Сума елементів:</strong> $sum";
echo "<ul>";
echo "<li><strong>Ім'я:</strong> " . htmlspecialchars($user["name"]) . "</li>";
echo "<li><strong>Email:</strong> " . htmlspecialchars($user["email"]) . "</li>";
echo "<li><strong>Телефон:</strong> " . htmlspecialchars($user["phone"]) . "</li>";
echo "</ul>";
if ($age > 18) {
    echo "<strong>Вам більше 18 років.</strong>";
} else {
    echo "<strong>Вам 18 років або менше.</strong>";
}
if ($grade >= 90 && $grade <= 100) {
    echo "<strong>Ваша оцінка: Відмінно</strong>";
} elseif ($grade >= 70 && $grade <= 89) {
    echo "<strong>Ваша оцінка: Добре</strong>";
} elseif ($grade >= 50 && $grade <= 69) {
    echo "<strong>Ваша оцінка: Задовільно</strong>";
} elseif ($grade < 50 && $grade >= 0) {
    echo "<strong>Ваша оцінка: Незадовільно</strong>";
} else {
    echo "<strong>Некоректне значення оцінки.</strong>";
}
?>