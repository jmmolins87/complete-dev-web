

console.warn("Object Constructor and Object Literal");

// Object Literal
const productLiteral = {
    nameProduct: "Monitor 20 Pulgadas",
    price: 300
}
console.log(productLiteral);

// Object Constructor
function Product(name, price, available) {
    this.name = name;
    this.price = price;
    this.available = available;
}
const displaySmall = new Product("Monitor 40 Pulgadas", 500, false);
console.log(displaySmall);
const displayCurve = new Product("Monitor 49 Pulgadas Curve", 599, true);
console.log(displayCurve);
const laptop = new Product("Macbook Pro 14\"", 1499, false);
console.log(laptop);

function formatProduct(product) {
    return `El producto ${product.name} tiene un precio de ${product.price}`;
}
console.log(formatProduct(displaySmall));

function Client(name, surname) {
    this.name = name;
    this.surname = surname;
}
const client = new Client("Juanma", "Molins Cortés");
console.log(client);

// Crear funciones que solo se utilizan en un objeto en específico
Product.prototype.formatProduct = function() {
    return `El producto ${this.name} tiene un precio de ${this.price}`;
};
console.log(formatProduct(displayCurve));