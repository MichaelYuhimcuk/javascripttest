// Завдання друге
function printEvenNumbers() {
    let n = prompt("Введіть число n:").trim();

    if (n === "") {
        console.log("Число не може бути порожнім");
        return;
    }

    n = Number(n);

    if (isNaN(n) || n < 2) {
        console.log("Введіть число 2 або більше");
    } else {
        for (let i = 2; i <= n; i += 2) {
            console.log(i);
        }
    }
}

printEvenNumbers();

