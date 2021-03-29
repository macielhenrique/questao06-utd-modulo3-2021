<?php

 #receber os dados do formulário
 $dados= $_GET;

 #transformar o array em string
$dados = implode (" - ", $dados);

#Criar um arquivo txt
$arquivo = fopen("usuarios.txt","a+");

# Escrevendo os dados do produto noo arquivo

fwrite($arquivo,$dados."\n");

#fechar o arquivo

fclose ($arquivo); 

#redirecionar para a tabela com a listagem

header("location: listaUsuarios.php");
