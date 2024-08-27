

console.warn("Funciones en JS");
// Declaraciónd de la función
add(); // Si se puede llamar antes de la declaración
function add() {
    console.log(`10 * 10 es: ${10 * 10}`);
}
// add(); // Llamado de la función

// Expresión de la función
// addExpresion(); // No se puede llamar antes de la declaración
const addExpresion = function () {
    console.log(`20 + 20 es: ${20 + 20}`);
}
addExpresion(); // Llamado de la función

// IIFE -> Funciones que se declaran y se ejecutan inmediatamente, previenen la contaminación del scope global
(function () {
    console.log("Ejecutando una función IIFE");
})();

