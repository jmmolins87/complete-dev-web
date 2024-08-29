


console.warn("Try Catch");

const num1 = 20;
const num2 = 30;

console.log(num1);
try {
    console.log(num3);
} catch (error) {
    console.error(error);
}
console.log(num2);
// Aún que la variable num3 no existe, el código no se detiene y se sigue ejecutando. Esto es gracias al try catch, que nos permite capturar errores y seguir con la ejecución del código. En este caso, el error es que la variable num3 no está definida.