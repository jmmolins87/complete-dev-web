


console.warn("Spread Operator");
const product = {
    nameProduct: "Monitor HD de 32\"",
    price: 300,
    available: true
}
const measure = {
    weight: "1kg",
    size: "1m"
}
console.log(`Las propiedades de product son: ${Object.keys(product)}`);
console.log(`Las propiedades de measure son: ${Object.keys(measure)}`);
// Spread Operator
const newProduct = {...product,...measure};
console.log(`Las propiedades de newProduct son: ${Object.keys(newProduct)}`);