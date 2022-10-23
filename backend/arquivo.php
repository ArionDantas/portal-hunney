<?php


if (isset($_POST['parametro']) && $_POST['parametro'] == 'modalEleicoes') {

    $pagina = file_get_contents('../eleicoes/index.html');
    echo $pagina;

} 

if (isset($_POST['parametro']) && $_POST['parametro'] == 'modalPalestra') {

    $pagina = file_get_contents('../Palestra/index.html');
    echo $pagina;

}
if (isset($_POST['parametro']) && $_POST['parametro'] == 'modalInterclasse') {

    $pagina = file_get_contents('../Esportes/index.html');
    echo $pagina;

} 

if (isset($_POST['parametro']) && $_POST['parametro'] == 'modalFeira') {

    $pagina = file_get_contents('../Feira/index.html');
    echo $pagina;

}
if (isset($_POST['parametro']) && $_POST['parametro'] == 'modalSemanaEstudante') {

    $pagina = file_get_contents('../SemanaEstudante/index.html');
    echo $pagina;

} 
