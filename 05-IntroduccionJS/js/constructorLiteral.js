

console.warn("Object Constructor and Object Literal");

// Object Literal
const productLiteral = {
    nameProduct: "Monitor 20 Pulgadas",
    price: 300
}
console.log(productLiteral);

// Object Constructor
function Product(name, price) {
    this.name = name;
    this.price = price;
}
const displaySmall = new Product("Monitor 40 Pulgadas", 500);
console.log(displaySmall);
const displayCurve = new Product("Monitor 49 Pulgadas Curve", 599);
console.log(displayCurve);
const laptop = new Product("Macbook Pro 14\"", 1499);
console.log(laptop);
