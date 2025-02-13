// Четверте завдання
const currentYear = new Date().getFullYear();


const name = prompt("Введіть ваше ім'я:");
const birthYear = parseInt(prompt("Введіть ваш рік народження:"));
const city = prompt("Введіть ваше місто проживання:");


const age = currentYear - birthYear;


let ageGroup;
if (age < 12) {
    ageGroup = "дитина";
} else if (age >= 12 && age < 18) {
    ageGroup = "підліток";
} else if (age >= 18 && age < 60) {
    ageGroup = "дорослий";
} else {
    ageGroup = "літня людина";
}


const capitals = {
    "Україна": "Київ",
    "США": "Вашингтон",
    "Франція": "Париж",
    "Німеччина": "Берлін"
};

let isCapital = Object.values(capitals).includes(city);


alert(`Привіт, ${name}! Вам ${age} років, ви - ${ageGroup}.`);
if (isCapital) {
    alert(`Ваше місто ${city} є столицею!`);
} else {
    alert(`Ваше місто ${city} не є столицею.`);
}
