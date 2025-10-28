"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Programador = void 0;
var TS_Tarea1_1_1 = require("./TS-Tarea1-1");
var Programador = /** @class */ (function (_super) {
    __extends(Programador, _super);
    function Programador(nombre, edad, salario, lenguaje, proyectos) {
        var _this = _super.call(this, nombre, edad, salario) || this;
        _this.lenguaje = lenguaje;
        _this.proyectos = proyectos;
        return _this;
    }
    Programador.prototype.informacion = function () {
        _super.prototype.informacion.call(this);
        console.log("Lenguaje: ".concat(this.lenguaje, ", Proyectos: ").concat(this.proyectos));
    };
    Programador.prototype.bonus = function () {
        var bonus = this.salarioAnual() * 0.08 * this.proyectos;
        return bonus;
    };
    return Programador;
}(TS_Tarea1_1_1.Empleado));
exports.Programador = Programador;
var programador1 = new Programador("Sebastian", 20, 1200, "TypeScript", 3);
programador1.informacion();
console.log("Bonus anual: ".concat(programador1.bonus()));
