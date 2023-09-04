<?php
include_once("conexao.php");
$numero = $_POST['']
$nome = $_POST['nome'];
$email = $_POST['email'];
$datainicio = date("y:m:d h:i:s");
$dataultima = date("y:m:d h:i:s");
$senha = $_POST['senha'];
$situacoe_id = $_POST['situacoe_id'];
$niveis_acesso_id = $_POST['niveis_acesso_id'];


$result_cadastro = "INSERT INTO usuarios (nome, email, created, modified, senha, 
situacoe_id, niveis_acesso_id) VALUES ('$nome', '$email', '$datainicio','$dataultima', 
'$senha', '$situacoe_id', '$niveis_acesso_id')";

$resultado_cadastro = mysqli_query($conn, $result_cadastro);
$ultimo_id = mysqli_insert_id($conn);

echo "ID: $ultimo_id <br>";
?>

<label>Número de inscrição: <input name="numero" type="number" class="numero-inscricao"></label>
<label>Nome: <input name="nome" type="text"></label>
<fieldset class="rg">
    <label>RG: <input name="rg" type="number"></label>
    <label>Expedido por: <input name="expedidoPor" type="text"></label>
    <label>CPF: <input name="cpf" type="number"></label>
    <label>Data de nascimento: <input name="nascimento" type="date"></label>
    <label>N° de dependentes: <input name="dependentes" type="text"></label>
    <label>Endereço: <input name="" type="text"></label>
    <label>N°: <input name="" type="number"></label>
</fieldset>
<label>Município: <input name="" type="text"></label>
<label>UF: <input name="" type="text" maxlength="2"></label>
<label>Fone: <input name="" type="tel"></label>
<label>Celular/WhatsApp: <input name="" type="tel"></label>
<label>Telefone para recado: <input name="" type="tel"></label>
<label>Nome: <input name="" type="text"></label>
<label>E-mail: <input name="" type="email"></label>