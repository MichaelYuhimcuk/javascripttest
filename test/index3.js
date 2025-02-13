// Перше завдання
let integerVar = 20;
let floatVar = 3.14;
let stringVar = "Привіт";
let booleanVar = true;

console.log("Початкові значення та їх типи:");
console.log(typeof integerVar, integerVar);
console.log(typeof floatVar, floatVar);
console.log(typeof stringVar, stringVar);
console.log(typeof booleanVar, booleanVar);


integerVar = "20";
floatVar = false;
stringVar = 42;
booleanVar = "true";

console.log("\nПісля змін:");
console.log(typeof integerVar, integerVar);
console.log(typeof floatVar, floatVar);
console.log(typeof stringVar, stringVar);
console.log(typeof booleanVar, booleanVar);

let concatResult = integerVar + stringVar;
let boolToNumber = Number(booleanVar);
let numberToString = String(floatVar);
let stringToBoolean = Boolean(stringVar);

console.log("\nПеретворення типів:");
console.log("Конкатенація числа і рядка:", concatResult);
console.log("Перетворення булевого значення у число:", boolToNumber);
console.log("Перетворення числа у рядок:", numberToString);
console.log("Перетворення числа у булеве значення:", stringToBoolean);


let myObject = {
    id: 1,
    name: "Об'єкт",
    isActive: true,
    value: 100.5
};


console.log("\nОб'єкт у форматі JSON:");
console.log(JSON.stringify(myObject, null, 2));
