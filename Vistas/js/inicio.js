import { libro } from "./libro.js";
let arreglosLibros = new Array();
let listaLibros = new Array();

var miLibro_1 = new libro("1", "El principito", "2", "ANTOINE DE SAINT-EXUPERY", "porrua", "español", "principito.jpg", "2019-08-15", "50", "1", "vigente", "");
var miLibro_2 = new libro("2", "El sexto sol", "4", "J.L. Murra", "Porrua", "español", "sol.jpg", "2019-08-15", "50", "2", "vigente", "");
var miLibro_3 = new libro("2", "El sexto sol", "4", "J.L. Murra", "Porrua", "español", "sol.jpg", "2019-08-15", "50", "2", "vigente", "");

//console.log(miProd1);

arreglosLibros.push(miLibro_1);
arreglosLibros.push(miLibro_2);
arreglosLibros.push(miLibro_3);

console.log(arreglosLibros);
let listaProductos;


document.addEventListener('DOMContentLoaded', Mostrar)

function Mostrar(e) {
    e.preventDefault();
    if (localStorage.getItem("listaDeLibros") == null) {
        guardarLocalStorage();
    }
    listaLibros = ObtenerListaLibrosLocalStorage();
    let stringlist = "";

    listaLibros.forEach(function(libro) {
        console.log(libro);

        stringlist += '<div class="col-lg-3">';
        stringlist += '<div class="card" style="width: 18rem;">';
        stringlist += '<img class="card-img-top"  width="100" height="120"  src="Vistas/img/' + libro.foto + '"alt="Card image cap">';
        stringlist += '<div class="card-body">';
        stringlist += '<h3 class="card-title">' + libro.titulo + '</h3>';
        stringlist += '<p class="card-text">'+libro.Costo+'</p>';
        stringlist += '<a href="#" class="btn btn-primary">Agrega al carrito</a>';
        stringlist += '</div></div></div></div>';
    });

    let controlLista = document.getElementById("lista");
    if (controlLista != null) {
        document.getElementById("lista").innerHTML = stringlist;
    }
    console.log(listaLibros);

}

function guardarLocalStorage() {
    localStorage.setItem('listaDeLibros', JSON.stringify(arreglosLibros));
}

function ObtenerListaLibrosLocalStorage() {
    let lista = new Array();
    lista = JSON.parse(localStorage.getItem('listaDeLibros'));
    return lista;
}
// function mostrarObjetos() {

//     listaProductos = "<tr><td>Clave</td><td>Nombre</td><td>Costo</td><td>Marca</td><td>Fecha Adquisicion</td><td>Foto</td></tr>";
//     for (let x = 0; x < arreglosProductos.length; x++) {
//         listaProductos += "<tr>";
//         let miProdu = arreglosProductos[x];
//         listaProductos += "<td>" + miProdu.id + "</td><td>" + miProdu.nombre + "</td><td>" + miProdu.costo + "</td><td>" + miProdu.marca + "</td><td>" + miProdu.FechaAdquisicion + "</td><td>" + miProdu.foto + "</td>";
//     }
//     document.getElementById("lista").innerHTML = listaProductos;
// }

// let list = "";s