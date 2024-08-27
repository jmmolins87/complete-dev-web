
// ------------
console.warn('Data Types in JavaScript -> strings');
// String o cadena de texto
const product = "Monitor de 20\"";
console.log(product, '->', typeof product);
// String con constructor
const book = String("Libro");
console.log(book, '->', typeof book);
const car = new String("Auto");
console.log(car, '->', typeof car);
// Función length para contar valores
const pharagraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.";
console.log(`Esto es una etiqueta p, y tiene ${pharagraph.length} carácteres`);
// Index of -> para encontrar un elemento en un string (retorna posición)
console.log(`La etiqueta p tiene ${pharagraph.indexOf('a')} a`);
// Includes (retorna true o false)
console.log(`La etiqueta p tiene la palabra "sit" -> ${pharagraph.includes('sit')}`);
// ------------
console.warn('Data Types in JavaScript -> numbers');
const numOne = '30';
const numTwo = 20.20;
const numThree = -5;
const numFour = .102;
console.log(numOne, '->', typeof numOne);
console.log(numTwo, '->', typeof numTwo);
console.log(numThree, '->', typeof numThree);
console.log(numFour, '->', typeof numFour);
console.info('Operaciones con números');
console.log(numFour, '+', numTwo, '->', numFour + numTwo);
console.log(numFour, '-', numTwo, '->', numFour - numTwo);
console.log(numFour, '*', numTwo, '->', numFour * numTwo);
console.log(numFour, '/', numTwo, '->', numFour / numTwo);
// ------------