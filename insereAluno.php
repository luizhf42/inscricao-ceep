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
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
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

<div>
    <label>Número de inscrição: <input name="numero_inscricao" type="number" class="numero-inscricao"></label>
    <label>Nome: <input name="nome" type="text"></label>
    <fieldset class="rg">
        <label>RG: <input name="rg" type="number"></label>
        <label>Expedido por: <input name="expedido_por" type="text"></label>
        <label>CPF: <input name="cpf" type="number"></label>
        <label>Data de nascimento: <input name="data_nascimento" type="date"></label>
        <label>N° de dependentes: <input name="numero_dependentes" type="text"></label>
        <label>Endereço: <input name="endereco" type="text"></label>
        <label>N°: <input name="numero" type="number"></label>
    </fieldset>
    <label>Município: <input name="municipio" type="text"></label>
    <label>UF: <input name="uf" type="text" maxlength="2"></label>
    <label>Fone: <input name="telefone" type="tel"></label>
    <label>Celular/WhatsApp: <input name="celular" type="tel"></label>
    <label>Telefone para recado: <input name="telefone_recado" type="tel"></label>
    <label>Nome: <input name="nome_recado" type="text"></label>
    <label>E-mail: <input name="email" type="email"></label>
</div>

<div>
    <legend>CURSO PRETENDIDO</legend>
    <select name="curso_pretendido">
        <option value="1">Técnico em Enfermagem - Subsequente (Noite)</option>
        <option value="2">Técnico em Farmácia - Subsequente (Noite)</option>
    </select>
</div>