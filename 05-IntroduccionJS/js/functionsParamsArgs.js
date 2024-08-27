

console.warn("Funciones con parámetros y argumentos");
function total(numOne, numTwo) {
    console.log(`La suma de ${numOne} y ${numTwo} es: ${numOne + numTwo}`);
}
total(10, 20); // Argumentos o valores reales
total(5, 50); // Argumentos o valores reales
total(50, 90); // Argumentos o valores reales


const saludar2 = function (n1 = 0, n2 = 0) { // Parámetros por defecto
    console.log(`Función con parámetros por defecto de los números ${n1} y ${n2} es: ${n1 + n2}`);
}
saludar2("10");