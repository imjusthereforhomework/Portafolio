//funcion del menu
function seleccionar(link){
    var opciones = document.querySelectorAll('#links a');
    opciones[0].className ="";
    opciones[1].className ="";
    opciones[2].className ="";
    opciones[3].className ="";
    opciones[4].className ="";
    link.className ="seleccionado";
    
    //aqui desaparesce el menu
    var x = document.getElementById("nav");
    x.className ="";
}


function responsiveMenu(){
    var x = document.getElementById("nav");
    if(x.className===""){
        x.className = "responsive";
    } 
    else{
        x.className = "";
    }
}

//detecto el scrollling
window.onscroll = function(){
    efectoPorcentaje()
};

function efectoPorcentaje(){
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight = skills.getBoundingClientRect().top;
    if(distancia_skills >=300){
        document.getElementById("html").classList.add("barra-progreso1");
        document.getElementById("c#").classList.add("barra-progreso2");
        document.getElementById("sql").classList.add("barra-progreso3");
        document.getElementById("js").classList.add("barra-progreso4");
        document.getElementById("py").classList.add("barra-progreso5");

    }
}