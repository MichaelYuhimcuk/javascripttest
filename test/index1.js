// Третє завдання
function compareNumbers(a, b, c) {
    let max = Math.max(a, b, c);
    let min = Math.min(a, b, c);
    console.log(`Найбільше число: ${max}`);
    console.log(`Найменше число: ${min}`);
}

function hasEvenNumber(a, b, c) {
    return a % 2 === 0 || b % 2 === 0 || c % 2 === 0;
}

function complexCondition(a, b, c) {
    return a > b && b < c;
}


function isPrime(number) {
    if (number < 2) return false;
    for (let i = 2; i <= Math.sqrt(number); i++) {
        if (number % i === 0) return false;
    }
    return true;
}

const a = 4, b = 1, c = 5;
compareNumbers(a, b, c);
console.log(`Є хоча б одне парне число: ${hasEvenNumber(a, b, c)}`);
console.log(`Складна умова виконується: ${complexCondition(a, b, c)}`);
console.log(`Число ${b} є простим: ${isPrime(b)}`);
