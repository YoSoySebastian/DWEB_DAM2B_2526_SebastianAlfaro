export class Empleado {
    nombre: string;
    edad: number;
    salario: number;

    constructor(nombre: string, edad: number, salario: number){
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }

    informacion(): void {
        console.log(`Nombre: ${this.nombre}, Edad: ${this.edad}, Salario: ${this.salario}`);
    }

    salarioAnual(): number {
        return this.salario * 12;
    }
}

let empleado1 = new Empleado("Sebastian", 20, 1200);
empleado1.informacion();
empleado1.salarioAnual();