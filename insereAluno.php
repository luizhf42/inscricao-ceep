<?php
include_once("conexao.php");
$numero_inscricao = $_POST['numero_inscricao'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$expedido_por = $_POST['expedido_por'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$numero_dependentes = $_POST['numero_dependentes'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$telefone_recado = $_POST['telefone_recado'];
$nome_recado = $_POST['nome_recado'];
$email = $_POST['email'];
$curso_pretendido = $_POST['curso_pretendido'];



$result_cadastro = "INSERT INTO pretendentes VALUES ('$numero_inscricao', '$nome', '$rg','$expedido_por', '$cpf', '$data_nascimento', '$numero_dependentes', '$endereco', '$numero', '$municipio', '$uf', '$telefone', '$celular', '$telefone_recado', '$nome_recado', '$email', '$curso_pretendido')";

echo "Inserido";
