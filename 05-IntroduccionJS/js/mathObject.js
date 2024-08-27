


console.warn('Math Object in JavaScript');
console.log('Este es un número random ->', window.Math.random());

let result = Math.PI;
console.log('El valor de PI es ->', result);
let numOne = 10.456789;
let resultRound = Math.round(numOne);
console.log(`Redondeo del número ${ numOne } ->`, resultRound);
let resultFloor = Math.floor(numOne);
console.log(`Redondeo hacia abajo del número ${ numOne } ->`, resultFloor);
let resultCeil = Math.ceil(numOne);
console.log(`Redondeo hacia arriba del número ${ numOne } ->`, resultCeil);
let resultSqrt = Math.sqrt(numOne);
console.log(`Raíz cuadrada del número ${ numOne } ->`, resultSqrt);
let resultAbs = Math.abs(numOne);
console.log(`Valor absoluto del número ${ numOne } ->`, resultAbs);
let resultMin = Math.min(3, 5, 1, 10, 8, 7);
console.log(`El número mínimo es ->`, resultMin);
let resultMax = Math.max(3, 5, 1, 10, 8, 7);
console.log(`El número máximo es ->`, resultMax);
let resultPow = Math.pow(2, 3);
console.log(`2 elevado a la 3 es ->`, resultPow);
let resultFlorMath = Math.floor(Math.random() * 100);
console.log('Número random entre 0 y 100 ->', resultFlorMath); 