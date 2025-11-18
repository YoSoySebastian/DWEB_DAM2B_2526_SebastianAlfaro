var libArray = [
    { titulo: "Harry Potter", autor: "JK Rowling", precio: 30, stock: 2000 },
    { titulo: "El Señor de los Anillos", autor: "Tolkien", precio: 32, stock: 5000 },
    { titulo: "Odisea", autor: "Homero", precio: 20, stock: 4000 }
];
var Libreria = /** @class */ (function () {
    function Libreria(libros) {
        this.libros = libros;
    }
    Libreria.prototype.listarLibros = function () {
        console.log("Libros disponibles:");
        for (var i = 0; i < this.libros.length; i++) {
            var lib = this.libros[i];
            console.log("".concat(lib.titulo, " | ").concat(lib.autor, " | ").concat(lib.precio, " | ").concat(lib.stock));
        }
        return this.libros;
    };
    Libreria.prototype.venderLibros = function (cliente, tituloLibro) {
        for (var i = 0; i < this.libros.length; i++) {
            var lib = this.libros[i];
            if (lib.titulo == tituloLibro) {
                if (lib.stock > 0) {
                    lib.stock = lib.stock - 1;
                    cliente.carrito.push(lib);
                    return "El libro \"".concat(tituloLibro, "\" ha sido agregado al carrito");
                }
                else {
                    return "El libro \"".concat(tituloLibro, "\" NO tiene stock");
                }
            }
        }
        return "No hay un libro con ese titulo";
    };
    Libreria.prototype.mostrarCarrito = function (cliente) {
        console.log("Carrito del cliente: ".concat(cliente.nombre));
        var total = 0;
        for (var i = 0; i < cliente.carrito.length; i++) {
            var lib = cliente.carrito[i];
            console.log("El titulo: ".concat(lib.titulo, " - El precio: ").concat(lib.precio, "\u20AC"));
            total += lib.precio;
        }
        console.log("El pago total es: ".concat(total));
    };
    return Libreria;
}());
var tienda1 = new Libreria(libArray);
var cliente1 = { nombre: "Sebastian", email: "seb@mail.com", carrito: [] };
tienda1.listarLibros();
tienda1.venderLibros(cliente1, "Odisea");
tienda1.mostrarCarrito(cliente1);
