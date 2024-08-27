

console.warn("Destructuring Objects");
const product = {
    nameProduct: "Monitor 20 Pulgadas",
    price: 300,
    available: true
}

// Forma anterior de hacerlo
const priceProduct = product.price;
console.log(`El precio del producto es: ${priceProduct}`);
const nameProductOld = product.nameProduct;
console.log(`El nombre del producto es: ${nameProductOld}`);

// Destructuring
const {nameProduct, price, available} = product;
console.log(`El precio del producto es: ${price}`);