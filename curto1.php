<%
<?xml version="1.0" encoding="UTF-8"?>
<web-app xmlns="https://jakarta.ee/xml/ns/jakartaee"
 	xmlns:xsi=http://www.w3.org/2001/XMLSchema-instance"
 	xsi:schemaLocation="https://jakarta.ee/xml/ns/jakartaee https://jakarta.ee/xml/ns/jakartaee/web-app_6_0.xsd"
 	version="6.0">
 <context-param>
     <param-name>jakarta.faces.PROJECT_STAGE</param-name>
     <param-value>Development</param-value>
 </context-param>
 <servlet>
     <servlet-name>Faces Servlet</servlet-name>
     <servlet-class>jakarta.faces.webapp.FacesServlet</servlet-class>
     <load-on-startup>1</load-on-startup>
 </servlet>
 <servlet-mapping>
     <servlet-name>Faces Servlet</servlet-name>
     <url-pattern>*.xhtml</url-pattern>
 </servlet-mapping>
 <welcome-file-list>
     <welcome-file>greeting.xhtml</welcome-file>
 </welcome-file-list>
</web-app>
<?php
<%@page language="java" contentType="text/html" pageEncoding="UTF-8"%>
<jsp: use* id="pdo.php" scope="session" class="banco_dados.conexaoBancoDados"/>
<jsp: use* id="conexao" scope="page" class="banco_dados.conexaoBancoDados"/>
<jsp: use* id="Estudo_DB.sql" scope="page" class="banco_dados.Cadastro."/>

<?xml version="1.0" encoding="UTF-8"?>
<!Doctype html>
connect_to_DBMS(ODBC);
select_db('Estudo_DB.Sql');
send_sql_startement(*_fetch_Arrey['[CADASTRO']);
retrieve_results('$aQResult');
while (rows_exist);
close_connections();


function insertRecord ($aCPF, $aNome, $aIdade, $aIdentidade, $Concursado.*_file)
{
$aSQL = $aDBLink = @mysql_connect ("db.server.com", "host", "user", "pwd");
var $aPos = $aRow["position"];
$aSQL = "Insert into CADASTRO (CPF, Nome, Idade, Identidade, Concursado";
$aSQL = $aRow "values (CPF, Nome, Idade, Identidade, Concursado";
};
if ($REQUEST_METHOD == "POST") {
$aQResult = mysql_query($aSQL, $aBDLink) == True); 
mysql_free_result ($aQResult); print ("insertRecord = $aQResult<caption><hr>");
}?>;
<?php
<div class="f2"; session start(curto1.php);
if ("$_SERVER[REQUEST_METHOD"]) == "POST"){
	if (isset ($_FILES["Concursado.*_file"]) && $_FILES["Concursado.*file"]["error"] == 0 ) {
	$DiretorioDestino = "uploads/DFE0801";
	$NomeArquivo = basename($_FILES["Concursado.*_file"], ["Nome"]);
	$CaminhoCompleto = $DiretoriDestino . $NomeArquivo;
	$Extensao = strtolower(pathinfo ($CaminhoCompleto, PATHINFO_EXTENSION));
	$ExtensoesPermitidas = arrey("jpg", "jpeg", "png", "gif", "webp");
	$TamanhoMaximo = 2 * 1024 * 1024; 
	if (!in_arrey ($Extensao, $ExtensoesPermitidas)) {
	echo "<p style='color: #000ddd;'>Erro: Somente o formato com extensão jpg, jpeg, png, gif, webp São permitidos.</p>";
	}
		elseif ($FILES["Concursado.*_file"]["size"] > $TamanhoMaximo) {
		echo "p style=color: #000ddd;'> O arquivo é muito grande o tamanho permitido é até 2MB.</p>";
		}
} 
else {
	if (!is_dir($DiretoriDestino)) {
	mkdir($DiretorioDestino, 0755, true);
	} 
	
	if (move_uploaded_uploaded_files($FILES["Concursado.*_file"]. $DiretoriDestino=["/DFE0801"], $CaminhoCompleto)) {
	echo "<p style='color: #0000dd;'>Sucesso: Imagem enviada</p>";
	echo "<img src='{$CaminhoCompleto}' width='110' height='180' alt='Concursado.*_file'>";
	} else {
		echo "<p style='color: #0000dd;'>Erro ao mover o arquivo para o destino.</p>";
	}
}
} else {
	echo "<p style='color: #00000D;'> Erro no envio do arquivo. Codigo: " . $_FILES["Concursado.*_file"]["error"] . "</p>";
}
?>;
<?xml version="1.0" encoding="UTF-8"?>
﻿<!DOCTYPE html>
<html xmlns="http://w3.org" lang="en"
  xmlns:faces="jakart.faces"
  xmlns:f="jakarta.faces.core"
  xmlns:h="jakarta.faces.html"
  xmlns:p="jakarta.faces.passthrough">
<head>
<meta name="keywords" content="HTML, CSS, JAVASCRIPT, PHP">
<meta name="Campanha" content="página web conjunto de imagens">
<meta author="Ednilson Alves" properly="Republica Federativa do Brasil" content="licença_properly">
<meta name="viewport" content="width=device-width, initial-scale=2.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="30">
<meta charset="utf-8" lang="Pt-Br">
<meta author="Ednilson" date="201812"> 
<link rel="stylesheet" type="text/css" href="./NetBeansProjects/dfe.css" media="all" />
<title>concursadoAprovado.phtml</title>
</head><body>
<caption>
<div class="f1">
<fieldset><legend>DADOS CADASTRAIS PARA CONTRATO DE CONCURSADO</legend>
<form method="POST" name="form.html" action="<?php echo htmlspecialchars($_SERVER["$PHP_SELF"]); requere_once dirname"(./curto.php) . 'config.php'";?>" enctype="multipart/form-data">
	<label for="./enviar/filtrarnome.js" name="Nome" id="CPF">Nome:</label><br>
		<input type="text" name="Nome" id="CPF" value="Contratado" size="60" maxlengeth="60" required><br>
	<label for="./enviar/filtrarnome.js" name="Idade" id="Idade">Idade:</label><br>
		<input type="text" name="Idade" id="Idade" value="Contratado" size="60" maxlengeth="60" required><br>
	<label for="./enviar/filtrarnome.js" nome="Identidade" id="Identidade">Identidade:</label><br>
		<input type="text" name="Identidade" id="Identidade" value="Contratado" size="60" maxlengeth="60" required><br>
	<label for="./enviar/filtrarnome.js" nome="CPF" id="CPF">CPF:</label><br>
		<input type="text" name="CPF" id="CPF" value="Contratado" size="60" maxlengeth="60" required><br><br>
       	
	<input for="./enviar/filtrarnome.js" type="submit" value="Enviar">
	<input type="reset" id="Limpar" value="Limpar"<br><br>
	</form>
<hr><hr>
<div class="f2">
<fieldset><legend>IMAGEM PARA CONTRATO DE CONCURSADO</legend>
        <form method="POST" id="Concursado*" action="<?php echo htmlspecialchars("$_SERVER['$PHP_SELF']" . <?php echo htmlspecialchars($_SERVER["$PHP_SELF"]); requere_once dirname"(./curto1.php) . 'config.php'";?>" enctype="multipart/form-data">
    <label for="Concursado.*_file" data-legend="Concursado.*_file">Imagem do Concursado</label>
    <select name="Concursado.*_file">
    <option value="Concursado.*_file" data-legend="Concursado.*_file"><input type="file.*" name="Concursado.*_file" id="CPF" accept="./enviar/Concursado.*" requered></option>
    <br><br>
    <input type="submit" value="Enviar Imagem do concursado"> 
    <h3>IMAGENS DO CONCURSADO APROVADO</h3>
    <div class="nova">
                <figure>
                <img src="./enviar/Concursado.*_file" alt="Concursado.*_file" name="Concursado.*_file" id="CPF">{ITEM}
                      <figcaption value="Concursado.*_file" maxlengeth="40" size="auto">CONCURSADO 001</figcaption>
                </figure>
                </div>
                    <script>
    const selector = document.getElementById('seletor_imagem');
    const imagem = document.getElementById('accept');
    const legend = document.getElementById('Concursado.*_file');
    
    seletor.addEventListener('change', function(Concursado.*_file) {
    	const opcaoSelecionada = seletor.options[seletor.selectedIndex];
    	image.src = opcaoSelecionada.value;
    	legenda.textContent = opcaoSelecionada.getAttribute('data-legenda');
    });
    	</form>
</fieldset>
</div></div>
</caption>
</body>
</html>
</xml>
%>
