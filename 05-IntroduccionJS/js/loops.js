


console.warn("Loops");
console.log("=== For ===");
console.log("Mostramos los números pares del 1 al 100");
for (let i = 1; i <= 100; i++) {
    if (i % 2 === 0) {
        console.log(i + " es par");
    } else if(i % 2 !== 0) {
        console.log(i + " es impar");
    } else {
        console.error("El número es mayor de 100");
    }
}
console.log("Recorriendo un array");
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Dicember"];
for (let i = 0; i < months.length; i++) {
    console.log(months[i]);
}
console.log("Recorriendo un array de objetos");
const shop = [
    {name: "Shirt", price: 50},
    {name: "Pants", price: 100},
    {name: "Shoes", price: 200},
    {name: "Hat", price: 20},
    {name: "Socks", price: 10}
];
for (let i = 0; i < shop.length; i++) {
    console.table(`Producto: ${shop[i].name} - Precio: ${shop[i].price}`);
}
console.log("=== While ===");
let i = 0; //Indice
while (i <= 10) { // Condición
    if(i % 2 === 0) {
        console.log(`Númeors pares ${i}`);
    } else {
        console.log(`Númeors inpares ${i}`);
    }
    i++; // Incremento
}
console.log("=== Do While ===");
let j = 0;
do {
    console.log(j);
    j++;
} while (j < 10); // Condición
console.log("=== Foreach ===");
// Se utilizará para mostrar en pantalla un arreglo o mandarlo a consola
shop.forEach((product) => console.log(`El producto ${product.name} tiene un precio de ${product.price}`));
console.log("=== Map ===");
// Se utilizará para crear un nuevo array con los elementos del array original
shop.map((product) => console.log(`El producto ${product.name} tiene un precio de ${product.price}`));