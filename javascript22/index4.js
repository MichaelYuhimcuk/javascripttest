// Завдання п'яте
const isAdult = true;
const hasPermission = false;

const accessAllowed = isAdult || hasPermission;

const accessMessage = accessAllowed ? "Дозволено" : "Заборонено";

console.log(accessMessage);
