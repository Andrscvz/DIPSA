
function activar(s){

    document.getElementById("inicio").className = "";
    document.getElementById("despacho").className = "";
    document.getElementById("servicios").className = "";
    document.getElementById("proyectos").className = "";
    document.getElementById("contacto").className = "";
    document.getElementById("reconocimientos").className = "";

    document.getElementById(s).className = "active";
	
}