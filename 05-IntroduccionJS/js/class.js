


console.warn("Class");
class Product {
    constructor(nameProduct, priceProduct) {
        this.nameProduct = nameProduct;
        this.priceProduct = priceProduct;
    }
    formatProduct() {
        return `El producto ${this.nameProduct} tiene un precio de ${this.priceProduct}`;
    }
    getPrice() {
        this.priceProduct;
    }
}
const productTablet = new Product("Tablet", 200);
console.log(productTablet);
const productMonitor = new Product("Monitor", 400);
console.log(productMonitor);

// Herencia
class Book extends Product {
    constructor(nameBook, priceBook, isbn) {
        super(nameBook, priceBook);
        this.isbn = isbn;
    }
    formatProduct() {
        return `${super.formatProduct()} y su ISBN es ${this.isbn}`;
    }
    getPrice() {
        super.getPrice();
        console.log("Y si hay en existencia");
    }
}
const jsBook = new Book("JavaScript, la revolución", 120, "123456");
console.log(jsBook);
console.log(jsBook.formatProduct());
console.log(jsBook.getPrice());