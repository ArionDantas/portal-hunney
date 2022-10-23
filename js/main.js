function clickMenu() {
    if (itens.style.display == 'block') {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }

}

$("#abrirModal").click(function () {
    
    $.post("arquivo.php", { parametro: 'modalTeste' }, function (result) {
        $("#main-container").html(result);
        $("#tittleModal").html('matéria 22/10/2022')
        $("#estrutura-modal").modal("show")
    });
});