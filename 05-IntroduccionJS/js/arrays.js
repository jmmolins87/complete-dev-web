

console.warn("Arrays");
const numbers = [10, 20, 30, 40, 50];
// Acceder a los valores de un array
console.warn("Numbers")
console.table(numbers);
console.log(`De la constante numbers en la posición 2 es: ${numbers[2]}`);
console.log(`De la constante numbers en la posición 4 es: ${numbers[4]}`);

console.warn("Months");
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Dicember"];
console.table(months);
console.warn("array");
const array = ["Hello", 10, true, "Yes", null, {name: "John", age: 30}, [1, 2, 3]];
console.table(array);

// Extensión de un array
console.log(`El número de elementos del array months es: ${months.length}`);
// Iterar un array
months.forEach((month, index) => {
    console.log(`El mes ${index + 1} es: ${month}`);
});
// Métodos para añadir elementos al final de un array
console.warn("Se añade un elemento al final del array");
numbers.push(60);
console.log(`Se añadió el número 60 al array numbers: ${numbers}`);
// Métodos para añadir elementos al principio de un array
console.warn("Se añade un elemento al inicio del array");
numbers.unshift(0);
console.log(`Se añadió el número 0 al array numbers: ${numbers}`);
// Métodos para eliminar elementos de un array
console.warn("Se elimina un elemento al inicio del array");
numbers.shift(0);
console.log(`Se eliminó el número 10 del array numbers: ${numbers}`);
// Métodos para eliminar elementos de la mitad de un array
console.warn("Se elimina un elemento de la mitad de un array");
numbers.splice(2, 1);
console.log(`Se eliminó el número 30 del array numbers: ${numbers}`);
// Métodos para invertir un array
console.warn("Se invierte el array");
numbers.reverse();
console.log(`Se invirtió el array numbers: ${numbers}`);
// Métodos para concatenar arrays
console.warn("Se concatenan arrays");
const newArray = [...numbers, ...months];
console.table(newArray);