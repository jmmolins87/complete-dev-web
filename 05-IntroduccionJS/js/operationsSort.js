

// Orden de las operaciones
console.warn('Orden de las operaciones');
let result = 4 + 5 * 6 / 3;
console.log(`El resultado de la operación: '4 + 5 * 6 / 3' es:`, result);
let resultPharetesis = (4 + 5) * 6 / 3;
console.log(`El resultado de la operación: '(4 + 5) * 6 / 3' es:`, resultPharetesis);
let resultPerCent = 4 + 5 * 6 % 3;
console.log(`El resultado de la operación: '4 + 5 * 6 % 3' es:`, resultPerCent);
let resultTax = (4 + 5 + 200 + 400) * .21;
console.log(`El impuesto de la operación: '(4 + 5 + 200 + 400) * .21' es:`, resultTax);

// Incrementos y decrementos
console.warn('Incrementos y decrementos');
let points = 10;
console.log(`Puntos iniciales: ${points}`);
++points;
console.log(`Puntos incrementados: ${points}`);
--points;
console.log(`Puntos decrementados: ${points}`);
setInterval(() => {
    const points10 = points += 10;
    console.log(`Puntos incrementados de 10 en 10 cada 5 segundos: ${points10}`);
}, 5000);
