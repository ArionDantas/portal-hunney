function clickMenu() {
    if (itens.style.display == 'block') {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }

}

$("#modalEleicoes").click(function () {
    
    $.post("backend/arquivo.php", { parametro: 'modalEleicoes' }, function (result) {

        $("#main-container").html(result);

        $("#estrutura-modal").modal("show")
    });
});


$("#modalPalestra").click(function () {
    
    $.post("backend/arquivo.php", { parametro: 'modalPalestra' }, function (result) {

        $("#main-container").html(result);

        $("#estrutura-modal").modal("show")
    });
});

$("#modalInterclasse").click(function () {
    
    $.post("backend/arquivo.php", { parametro: 'modalInterclasse' }, function (result) {

        $("#main-container").html(result);

        $("#estrutura-modal").modal("show")
    });
});
$("#modalFeira").click(function () {
    
    $.post("backend/arquivo.php", { parametro: 'modalFeira' }, function (result) {

        $("#main-container").html(result);

        $("#estrutura-modal").modal("show")
    });
});


$("#modalSemanaEstudante").click(function () {
    
    $.post("backend/arquivo.php", { parametro: 'modalSemanaEstudante' }, function (result) {

        $("#main-container").html(result);

        $("#estrutura-modal").modal("show")
    });
});