// Варіант 1 Юхимчука Миколи ІТ-21
let numbers = Array.from({ length: 10 }, () => Math.floor(Math.random() * 100) + 1);
console.log("Початковий масив:", numbers);

let average = numbers.reduce((sum, num) => sum + num, 0) / numbers.length; 
let maxValue = Math.max(...numbers);
let minValue = Math.min(...numbers);
let sortedNumbers = [...numbers].sort((a, b) => a - b);

console.log("Середнє арифметичне:", average);
console.log("Максимальне значення:", maxValue);
console.log("Мінімальне значення:", minValue);
console.log("Відсортований масив:", sortedNumbers);
