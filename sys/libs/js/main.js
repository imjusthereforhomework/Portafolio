

function showView(view){
    $.ajax({
        data: {},
        url: "app/vistas/"+view+"/"+view+".php",
        type: "POST",
        dataType: "html"
    }).done(function(data){
        $("#pageView").html(data);

    });
}

