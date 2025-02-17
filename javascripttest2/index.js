// Завдання перше
function checkAge() {
    let age = prompt("Введіть ваш вік:").trim();

    if (age === "") {
        alert("Вік не може бути порожнім");
        return;
    }

    age = Number(age);

    if (isNaN(age)) {
        alert("Введіть коректний числовий вік");
    } else if (age < 18) {
        alert("Заборонено вхід");
    } else if (age <= 65) {
        alert("Ласкаво просимо");
    } else {
        alert("Будьте обережні");
    }
}

checkAge();

