<?php
$nome= $_POST['nome'] ?? 'erro campo nome';
$endereco= $_POST['endereco'] ?? 'erro campo nome';
$numero= $_POST['numero'] ?? 'erro campo numero';
$complemento= $_POST['complemento'] ?? 'erro campo complemento';
$cidade= $_POST['cidade'] ?? 'erro campo cidade';
$estado= $_POST['estado'] ?? 'erro campo estado';

    echo "Nome: ".$nome."<br>";
    echo "Endereço: ".$endereco."<br>";
    echo "Número: ".$numero."<br>";
    echo "Complemento: ".$complemento."<br>";
    echo "Cidade: ".$cidade."<br>";
    echo "Estado: ".$estado."<br>";