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
        return this.libros;
    }

    venderLibros(cliente: Cliente, tituloLibro: string): string {
        
        
        return "Se ha agregado un libro al carrito"
    }

    mostrarCarrito(cliente: Cliente): void {
        console.log(`Carrito del cliente: ${cliente.nombre}`);
        for (let i = 0; i < cliente.carrito.length; i++){
            const lib = cliente.carrito[i];
            console.log(`El titulo: ${lib.titulo} - El precio: ${lib.precio}€`)
        }
    }
}

let tienda1 = new Libreria(libArray);
let cliente1: Cliente = { nombre: "Sebastian", email: "seb@mail.com", carrito: [] };

tienda1.listarLibros;
tienda1.venderLibros(cliente1, "Odisea");
tienda1.mostrarCarrito(cliente1);