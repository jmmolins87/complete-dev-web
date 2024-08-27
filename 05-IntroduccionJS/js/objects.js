


console.warn("Objects");
// const productName = "Monitor 20 Pulgadas";
// const price = 300;
// const available = true;
// * Se puede crear un objeto con la palabra reservada new
// Podemos crear un objeto que contenga las propiedades de un producto
const product = {
    name: "Monitor 20 Pulgadas",
    price: 300,
    available: true
}
console.log(`El nombre del producto es: ${product.name}
El precio del producto es: ${product.price}
El producto está disponible: ${product.available}
`, product);

console.warn("Modify objects");
// * Se puede modificar las propiedades de un objeto
product.available = false;
product.image = "imagen.jpg";
console.log(`La propiedad agregada es: ${product.image}`);
console.log(product);
delete product.available;
console.log("La propiedad eliminada es available:");
console.log(product);
