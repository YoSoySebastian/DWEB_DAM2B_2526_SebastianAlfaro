"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Empresa = void 0;
var programador_1 = require("./programador");
var Empresa = /** @class */ (function () {
    function Empresa(nombre) {
        this.nombre = nombre;
        this.empleados = [];
    }
    Empresa.prototype.agregarEmpleado = function (emp) {
        this.empleados.push(emp);
    };
    Empresa.prototype.mostrarEmpleados = function () {
        console.log("Empleados de ".concat(this.nombre, ":"));
        for (var i = 0; i < this.empleados.length; i++) {
            this.empleados[i].informacion();
        }
    };
    Empresa.prototype.costeAnual = function () {
        var total = 0;
        for (var i = 0; i < this.empleados.length; i++) {
            var emp = this.empleados[i];
            total += emp.salarioAnual();
            if (emp instanceof programador_1.Programador) {
                total += emp.bonus();
            }
        }
        return total;
    };
    return Empresa;
}());
exports.Empresa = Empresa;
