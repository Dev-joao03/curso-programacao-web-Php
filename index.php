<?php
    /* MANIPULAÇÃO DE STRING */

    //strlen() [mostra a quantidade de caracteres da string]
    echo strlen('hello word');
---------------------------------------------------------------------
    $palavra = "hello"
    echo strlen($palavra);

    //str_word_count() [conta o numero de palavras que você tem]
    $palavra = "ola"; // 1 palavra
    $palavra = "ola, tudo bem?"; //3 palavras

    //strrev() [coloca a palavra de tras pra frente]
    echo strrev('joao');

    //strpos() [ele aponta a posiçaõ da palavra em uma string]
    echo strpos("ola tudo bom?","tudo")

    //str_replace() [serve para substituir a palavra dentro do seu código]
    $palavra = "olá word";
    echo str_replace("word","Joao", $palavra); //primeira palavra(word) é a que será substituida, a segunda palavra(Joao) é a que você quer colocar, ja a terceira($palavra) se refere a string que será substituida
    
    echo "$palavra";

?>