// Практична 2 Варіант 5 
const secretNumber = Math.floor(Math.random() * 100) + 1;
let userGuess;

do {
    userGuess = parseInt(prompt("Вгадайте число від 1 до 100:"));

    if (userGuess < secretNumber) {
        console.log("Загадане число більше.");
    } else if (userGuess > secretNumber) {
        console.log("Загадане число менше.");
    } else if (userGuess === secretNumber) {
        console.log("Вітаємо! Ви вгадали число!");
    } else {
        console.log("Будь ласка, введіть коректне число.");
    }
} while (userGuess !== secretNumber);
