<?php
    $nome = "Funções de manipulação de strings no PHPs";
    $nome_maisculo = strtoupper($nome); //Converte a string toda para maisculas;
    echo $nome_maisculo;

    $nome = "Funções de manipulação de strings no PHPs";
    $nome_minusculo = strtolower($nome); //Converte a string toda para minusculas;
    echo $nome_minusculo;

    $nome = "Funções de manipulação de strings no PHPs";
    $parte = substr($nome,8); //Retorna um fragmento da string
    echo $parte;

    $nome = "Linha de Código";
    $parte = substr($nome,0,5); //Retorna um fragmento da string
    echo $parte;

    $repetido = str_repeat("0",5); //Repete uma string o número de vezes do argumento inteiro
    echo $repetido;

    $qtd_char = strlen("Linha de Código"); //Quantidade de Caracteres;
    echo $qtd_char;

    $texto = "Olá, mundo.";
    $novo_texto = str_replace("mundo","leitor",$texto); //Substitui os caracters numa string
    echo $novo_texto;

    $texto = "Bem vindo ao Linha de Código!";
    $pos = strpos($texto, "Código"); //Dados 2 argumentos, devolve a posição do texto de pesquisa no texto a pesquisar.
    echo $pos;
?>