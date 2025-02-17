// Завдання четверте 
function calculator() {
    let a = prompt("Введіть перше число:").trim();
    let b = prompt("Введіть друге число:").trim();
    let operation = prompt("Введіть операцію (+, -, *, /):").trim();

    if (a === "" || b === "" || operation === "") {
        alert("Всі поля мають бути заповнені");
        return;
    }

    a = Number(a);
    b = Number(b);

    if (isNaN(a) || isNaN(b)) {
        alert("Введіть коректні числа");
        return;
    }

    let result;

    switch (operation) {
        case "+":
            result = a + b;
            break;
        case "-":
            result = a - b;
            break;
        case "*":
            result = a * b;
            break;
        case "/":
            if (b === 0) {
                alert("Ділення на нуль неможливе");
                return;
            }
            result = a / b;
            break;
        default:
            alert("Невідома операція; використовуйте +, -, *, /");
            return;
    }

    alert(`Результат: ${result}`);
}

calculator();
