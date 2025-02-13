// Друге завдання
let number1 = parseFloat(prompt("Введіть перше число:"));
let number2 = parseFloat(prompt("Введіть друге число:"));
let number3 = parseFloat(prompt("Введіть третє число:"));


let average = (number1 + number2 + number3) / 3;
console.log(`Середнє арифметичне: ${average}`);


console.log(`Модуль чисел: ${Math.abs(number1)}, ${Math.abs(number2)}, ${Math.abs(number3)}`);
console.log(`Округлення в більшу сторону: ${Math.ceil(number1)}, ${Math.ceil(number2)}, ${Math.ceil(number3)}`);
console.log(`Округлення в меншу сторону: ${Math.floor(number1)}, ${Math.floor(number2)}, ${Math.floor(number3)}`);
console.log(`Піднесення до степеня (num1^num2): ${Math.pow(number1, number2)}`);


const checkDivisibility = (number, divisor) => number % divisor === 0 ? "Так" : "Ні";
console.log(`Чи ділиться ${average} на 5 без залишку? ${checkDivisibility(average, 5)}`);
console.log(`Чи ділиться ${average} на 7 без залишку? ${checkDivisibility(average, 7)}`);


const isTriangle = (a, b, c) => (a + b > c) && (a + c > b) && (b + c > a);
console.log(`Чи може існувати трикутник з такими сторонами? ${isTriangle(number1, number2, number3) ? "Так" : "Ні"}`);
