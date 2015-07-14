
function filtro(tipo){

	document.getElementById("Todo").className = "";
    document.getElementById("Comercial").className = "";
    document.getElementById("Residencial").className = "";
    document.getElementById("Salud").className = "";
    document.getElementById("Educativo").className = "";

    document.getElementById(tipo).className = "active";
}

$("#Todo").click(function(){
    $(".residencial").show();
    $(".comercial").show();
    $(".salud").show();
    $(".educativo").show();
});

$("#Comercial").click(function(){
    $(".residencial").hide();
    $(".comercial").show();
    $(".salud").hide();
    $(".educativo").hide();
});

$("#Residencial").click(function(){
    $(".residencial").show();
    $(".comercial").hide();
    $(".salud").hide();
    $(".educativo").hide();
});

$("#Salud").click(function(){
    $(".residencial").hide();
    $(".comercial").hide();
    $(".salud").show();
    $(".educativo").hide();
});

$("#Educativo").click(function(){
    $(".residencial").hide();
    $(".comercial").hide();
    $(".salud").hide();
    $(".educativo").show();
});