// Варіант 1 Юхимчука Миколи ІТ-21
let numbers = [12, 5, 8, 20, 33, 2, 18, 27];

let sum = numbers.reduce((acc, num) => acc + num, 0);
let average = sum / numbers.length;

let maxNumber = Math.max(...numbers);
let minNumber = Math.min(...numbers);

let sortedNumbers = [...numbers].sort((a, b) => a - b);

console.log("Масив чисел:", numbers);
console.log("Середнє арифметичне:", average);
console.log("Максимальне значення:", maxNumber);
console.log("Мінімальне значення:", minNumber);
console.log("Відсортований масив:", sortedNumbers);
