interface Libro {
    titulo: string;
    autor: string;
    precio: number;
    stock: number;
}

interface Cliente {
    nombre: string;
    email: string;
    carrito: Libro[];
}

interface Tienda {
    listarLibros(): Libro[];
    venderLibros(cliente: Cliente, tituloLibro: string): string;
    mostrarCarrito(cliente: Cliente): void;
}

let libArray: Libro[] = [
    {titulo: "Harry Potter", autor: "JK Rowling", precio: 30, stock: 2000},
    {titulo: "El Señor de los Anillos", autor: "Tolkien", precio: 32, stock: 5000},
    {titulo: "Odisea", autor: "Homero", precio: 20, stock: 4000}
];

class Libreria implements Tienda{
    private libros: Libro[];

    constructor(libros: Libro[]){
        this.libros = libros;
    }

    listarLibros(): Libro[] {
        console.log("Libros disponibles:");
        for (let i = 0; i < this.libros.length; i++){
            const lib = this.libros[i];
            console.log(`${lib.titulo} | ${lib.autor} | ${lib.precio} | ${lib.stock}`);
        }
        return this.libros;
    }

    venderLibros(cliente: Cliente, tituloLibro: string): string {
        for (let i = 0; i < this.libros.length; i++){
            const lib = this.libros[i];
            if (lib.titulo == tituloLibro){
                if (lib.stock > 0){
                    lib.stock = lib.stock - 1;
                    cliente.carrito.push(lib);
                    return `El libro "${tituloLibro}" ha sido agregado al carrito`;
                } else {
                    return `El libro "${tituloLibro}" NO tiene stock`;
                }
            }
        }
        return "No hay un libro con ese titulo";
    }

    mostrarCarrito(cliente: Cliente): void {
        console.log(`Carrito del cliente: ${cliente.nombre}`);
        let total = 0;

        for (let i = 0; i < cliente.carrito.length; i++){
            const lib = cliente.carrito[i];
            console.log(`El titulo: ${lib.titulo} - El precio: ${lib.precio}€`)
            total += lib.precio;
        }
        console.log(`El pago total es: ${total}`)
    }
}

let tienda1 = new Libreria(libArray);
let cliente1: Cliente = { nombre: "Sebastian", email: "seb@mail.com", carrito: [] };

tienda1.listarLibros();
tienda1.venderLibros(cliente1, "Odisea");
tienda1.mostrarCarrito(cliente1);