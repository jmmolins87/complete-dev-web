

console.warn("Métodos de Arrays");
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Dicember"];
console.table(months);
const shop = [
    { name: "Monitor 27 pulgadas", price: 500 },
    { name: "Television", price: 700 },
    { name: "Tablet", price: 300 },
    { name: "Audifonos", price: 200 },
    { name: "Teclado", price: 50 },
    { name: "Celular", price: 500 }
]
console.table(shop);

// Iteramos el array months para ver si existe un mes específico
console.warn("Iterar un array para buscar un elemento");
months.forEach((month, index) => {
    if (month === "March") {
        console.log(`El mes de ${month} existe en la posición ${index}`);
    }
});
// Includes
console.warn("Método includes");
const resultInclude = months.includes("March");
console.log(`El mes de March existe en el array months: ${resultInclude}`);
// Some -> ideal para arrays de objetos
console.warn("Método some");
const resultSome = shop.some(product => product.price > 400);
console.log(`Hay productos con un precio mayor a 400: ${resultSome}`);
// Reduce
console.warn("Método reduce");
const resultReduce = shop.reduce((total, product) => total + product.price, 0);
console.log(`El precio total de los productos es: ${resultReduce}`);
// Filter
console.warn("Método filter");
const resultFilter = shop.filter(product => product.price > 400);
console.table(`Los precios mayores a 400 son: ${Object.keys(resultFilter)}`);