// Завдання п'яте
function findMaxMin(arr) {
    
    let max = arr[0];
    let min = arr[0];

    
    for (let num of arr) {
        
        if (num > max) {
            max = num;
        }
        if (num < min) {
            min = num;
        }
    }

    
    return { max, min };
}


const numbers = [1, 2, 3, 4, 5];
const result = findMaxMin(numbers);
console.log(result);
