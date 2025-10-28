import { Empleado } from "./TS-Tarea1-1";

export class Programador extends Empleado{
    lenguaje: string;
    proyectos: number;

    constructor(nombre: string, edad: number, salario: number, lenguaje: string, proyectos: number){
        super(nombre, edad, salario);
        this.lenguaje = lenguaje;
        this.proyectos = proyectos;
    }

    informacion(): void{
        super.informacion();
        console.log(`Lenguaje: ${this.lenguaje}, Proyectos: ${this.proyectos}`)
    }

    bonus(): number{
        let bonus = this.salarioAnual() * 0.08 * this.proyectos;
        return bonus;
    }
}

let programador1 = new Programador("Sebastian", 20, 1200, "TypeScript", 3);
programador1.informacion();
console.log(`Bonus anual: ${programador1.bonus()}`);