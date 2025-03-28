// Практична 1 варіант 2
let num1 = parseFloat(prompt("Введіть перше число:"));
let num2 = parseFloat(prompt("Введіть друге число:"));
let num3 = parseFloat(prompt("Введіть третє число:"));

let average = (num1 + num2 + num3) / 3;
console.log(`Середнє арифметичне: ${average}`);

console.log(`Модуль першого числа: ${Math.abs(num1)}`);
console.log(`Модуль другого числа: ${Math.abs(num2)}`);
console.log(`Модуль третього числа: ${Math.abs(num3)}`);

console.log(`Округлення першого числа в більшу сторону: ${Math.ceil(num1)}`);
console.log(`Округлення другого числа в більшу сторону: ${Math.ceil(num2)}`);
console.log(`Округлення третього числа в більшу сторону: ${Math.ceil(num3)}`);

console.log(`Округлення першого числа в меншу сторону: ${Math.floor(num1)}`);
console.log(`Округлення другого числа в меншу сторону: ${Math.floor(num2)}`);
console.log(`Округлення третього числа в меншу сторону: ${Math.floor(num3)}`);

console.log(`Перше число в квадраті: ${Math.pow(num1, 2)}`);
console.log(`Друге число в квадраті: ${Math.pow(num2, 2)}`);
console.log(`Третє число в квадраті: ${Math.pow(num3, 2)}`);

function isDivisible(num, divisor) {
    return num % divisor === 0 ? `Ділиться на ${divisor}` : `Не ділиться на ${divisor}`;
}

console.log(`Середнє арифметичне ${isDivisible(average, 5)}`);
console.log(`Середнє арифметичне ${isDivisible(average, 7)}`);

function isValidTriangle(a, b, c) {
    return (a + b > c) && (a + c > b) && (b + c > a);
}

if (isValidTriangle(num1, num2, num3)) {
    console.log("Трикутник з такими сторонами може існувати.");
} else {
    console.log("Трикутник з такими сторонами не може існувати.");
}
