


console.warn("Funciones que retornan un valor");
function sumar(a, b) {
    return a + b;
}
const result = sumar(10, 20);
console.log(result); // 30

let total = 0;
function addShop(price) {
    return total += price;
}
function calculateTax(total) {
    return .21 * total;
}
total = addShop(300);
total = addShop(200);
console.log(total); // 500
const totalPay = calculateTax(total);
console.log(`Total a pagar con impuestos: ${totalPay}`); // 105