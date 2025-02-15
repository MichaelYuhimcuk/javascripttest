// Завдання сьоме
function calculator(num1, num2, operator) {
    switch (operator) {
        case '+':
            return num1 + num2;
        case '-':
            return num1 - num2;
        case '*':
            return num1 * num2;
        case '/':
            if (num2 === 0) {
                return 'Помилка: ділення на нуль';
            }
            return num1 / num2;
        default:
            return 'Помилка: невідома операція';
    }
}


console.log(calculator(2, 4, '+'));
console.log(calculator(3, 5, '-')); 
console.log(calculator(7, 8, '*')); 
console.log(calculator(10, 2, '/')); 
console.log(calculator(8, 4, '/')); 
console.log(calculator(5, 1, '^')); 
