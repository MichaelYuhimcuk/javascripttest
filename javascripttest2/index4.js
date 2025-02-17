function guessTheNumber() {
    const randomNumber = Math.floor(Math.random() * 100) + 1;
    let userGuess;

    do {
        userGuess = prompt("Вгадайте число від 1 до 100:").trim();

        if (userGuess === null) {
            alert("Гру скасовано");
            return;
        }

        if (userGuess === "") {
            alert("Поле не може бути порожнім");
            continue;
        }

        userGuess = Number(userGuess);

        if (isNaN(userGuess) || userGuess < 1 || userGuess > 100) {
            alert("Будь ласка, введіть число від 1 до 100");
        } else if (userGuess < randomNumber) {
            alert("Загадане число більше");
        } else if (userGuess > randomNumber) {
            alert("Загадане число менше");
        } else {
            alert("Вітаємо! Ви вгадали число");
        }
    } while (userGuess !== randomNumber);
}

guessTheNumber();
