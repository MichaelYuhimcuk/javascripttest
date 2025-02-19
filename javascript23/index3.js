// Завдання 4
const calculate = (num1, num2, operator) => {
    switch (operator) {
        case "+":
            return num1 + num2;
        case "-":
            return num1 - num2;
        case "*":
            return num1 * num2;
        case "/":
            return num2 !== 0 ? num1 / num2 : "Ділення на нуль неможливе";
        default:
            return "Невідома операція";
    }
};

console.log(calculate(10, 5, "+")); 
console.log(calculate(10, 5, "-")); 
console.log(calculate(10, 5, "*")); 
console.log(calculate(10, 5, "/")); 
console.log(calculate(10, 0, "/")); 
console.log(calculate(10, 5, "%")); 