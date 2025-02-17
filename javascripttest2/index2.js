// Завдання третє
function calculateFactorial() {
    let n = prompt("Введіть число n:").trim();

    if (n === "") {
        console.log("Число не може бути порожнім");
        return;
    }

    n = Number(n);

    if (isNaN(n) || n < 0) {
        console.log("Введіть невід'ємне число");
        return;
    }

    let factorial = 1;
    let i = 1;

    while (i <= n) {
        factorial *= i;
        i++;
    }

    console.log(`Факторіал ${n} дорівнює ${factorial}`);
}

calculateFactorial();

