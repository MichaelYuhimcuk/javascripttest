// Завдання 5
const filterLongWords = (words, n) => words.filter(word => word.length > n);

console.log(filterLongWords(["яблуко", "банан", "ананас", "кіт", "сонце"], 5));

console.log(filterLongWords(["котик", "лев", "автомобіль", "сонце"], 4));

console.log(filterLongWords(["а", "бб", "ввв", "гггг"], 2));

