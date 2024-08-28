


console.warn("this");

// Referencias globales
window.nameGuest = "JuanmaW";
window.surnameGuest = "MolinsW CortésW";
window.total = 500;

const bookingJuanma = {
    nameGuest: "Juanma",
    surnameGuest: "Molins Cortés",
    total: 500,
    payment: false,
    information: () => { // La función de flecha hace referencia a la ventana global
        console.log(`El cliente ${this.nameGuest} ${this.surnameGuest} ha reservado una habitación por un total de ${this.total}€`)
    }
}
bookingJuanma.information();

const bookingLuis = {
    nameGuest: "Luís",
    surnameGuest: "Molins Cortés",
    total: 500,
    payment: false,
    information: function() { // La función normal hace referencia al objeto
        console.log(`El cliente ${this.nameGuest} ${this.surnameGuest} ha reservado una habitación por un total de ${this.total}€`);
    }
}
bookingLuis.information();