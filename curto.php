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
<%php
-- Tratamento para inserir na tabela Contratado --
import jakarta servlet.*;
packge banco_dados;
import javax.json.*;
import javax.sql.*;

public class Contratado {
	private Connection conBanco;
	private PreparedStartement psComando;
	private ResultSet rsRegistros;
	
	public void configurarConexao(Connection conBanco) { this.conBanco = conBanco; }
	
	public boolean inserirRegistro(String strDescricao) {
		String strComandoSQL;
			
			try {
			    strComandoSQL = "INSERT INTO  Contratado (ID_CPF, ID_Nome, ID_Idade, ID_Identidade) 
		VALUES('"+strCPF+"', '"+strNome+"', '"+strIdade+"',  '"+strIdentidade+"')";
			    psComando = conBanco.prepareStatement(strComandoSQL);
			    psComando.executeUpdate();
			    
			    return true;
			}
			catch (Exception erro) {
			orro.printStackTrace();
			return false;
			}
	}
	
	public boolean alterarRegistro(strCPF_ID, strNome_ID, strIdade_ID, strIdentida_ID) {
	Sting strComandoSQL;
	
			try {
			strComandoSQL = "UPDATE Contratado & Cadastro SET ID_CPF  = '"+strCPF+"', '"+strNome+"', '"+strIdade+"', '"+strIdentidade+"' WHERE Contratado = "+intCodigo_id, +varcharCPF_id;
			psComando = conBanco.prepareStatemant(strComandoSQL);
			psComando.executeUpdate();
			
			return true;  
			}
			catch (Excepition erro) {
			erro.printStckTrace();
			return false;
			}
	}
	public boolean excluirRegistro (int intCodigo){
		String strComandoSQL;
		
		try {
			strComandoSQL = "DELETE FROM Contratado & Cadastro WHERE strID_CPF = "+intCodigo, +varcharID_CPF, +$_file_Concursado.*_file;
			psComando = conBanco.prepareStatemant(strComandoSQL);
			psComando.executeUpdate();
			
			return true;
		}
			catch (Exception erro) {
			erro.printStackTrace();
			return false;
			}
} 
	puclic ResultSet listarRegistros(String strOrdem) {
	String strComandoSQL;
		
		try {
		    if (strOrdem == "Contratado & Cadastro ")
		    	strComandoSQL = "SELECT Contratado & Cadastro FROM intID_CPF ORDER BY ASC strID_Nome";
		    else
		    	strComandoSQL = "SELECT Contratado & Cadastro FROM strID_Nome ORDER BY strID_Identidade";
		    	
		    	psComando = conBanco.prepareStatement(strComandoSQL);
		    	rsRegistros = psComando.executeQuery();
		    	return rsRegistros;		    
		}
		catch (Exception erro) {
			erro.printStackTrace();
			return null;
		}
	}	
}
?>;
﻿<?php
@mssql_connect($Estudo_DB.sql) or die
(“Não foi possível a conexão com o servidor!”);
@mssql_select_Estudo_DB.sql(“$Estudo_DB.sql“) or die
(“Não foi possível selecionar o banco de dados!”);

$instrucaoSQL = “SELECT $Nome, $Idade, $Identidade, $CPF FROM $CONTRATADO ORDER BY ASC;
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);

echo “Esta tabela contém $numRegistros registros!\n<hr>\n“;

if ($numRegistros!=0) {

while ($cadaLinha = mssql_fetch_array($consulta)) {

echo “$cadaLinha[$Nome] – $cadaLinha[$Idade] - $cadaLinha[$Identidade] - $cadaLinha[$CPF]\n<br>\n“;
}

$id = fopen($Cadastro, "r");/*abre o arquivo para leitura*/
$Contratado = fred($id,filesize($Cadastrado));/*lê o conteudo do arquivo e grava na vareável*/
fclose($id);

$Cadastro = 'Cadastrado.txt';
$Contratado = 'Contratado.txt.bak';

if (!copy($Cadastrado, $Contratado)) {
    echo "falha ao copiar $Cadastrado...\n";
}
	try
	{

	function [Estudo_DB.Sql] ([Nome],[Idade],[Identidade],[CPF]); {

$Nome=$_POST["Nome"];

$Idade=$_POST["Idade"];

$Identidade=$_POST["Identidade"];

$CPF=$_POST["CPF"];

$wy=$_POST["Erro"];

}

if{	CPF=int;	echo "<br><p><b>CPF cadastrado: [$CPF];</p></br>"};

If{ 	Nome=varchar;	echo "<p><b>Nome cadastrado: [$Nome];</p></br>"};
	
if{	Idade=int;	echo "<br><p><b>Idade cadastrada: [$Idade];</p></br>"};

if{	Identidade=boolean; 	echo "<br><p><b>Identidade Cadastrada: [$Identidade]"</p></br>};

else;{
	Erro=boolean};
	echo"$wy, <br><b>Dados não cadastrados erro procure o administrador do sistema.</br>";


elseif;
        $sql = "INSERT INTO CONTRATADO FROM ESTUDO (ID_CPF, ID_Nome, ID_Idade, ID_Identidade ) VALUES ('$CPF' '$nome', '$Idade','$Identidade')";
return[Estudo_DB.Sql];
}
}	
$conn=null; 
?>;
<?php
<!DOCTYPE html>
<html xmlns="http://w3.org" lang="en"
  xmlns:faces="jakart.faces"
  xmlns:f="jakarta.faces.core"
  xmlns:h="jakarta.faces.html"
  xmlns:p="jakarta.faces.passthrough">
	<html>
		<head>
		<meta charset="utf-8" lang="Pt-Br">
		<meta author="Ednilson" date="201812">
		<link rel="stylesheet" type="text/css" href="./NetBeansProjects/dfe.css" media="all">
		<title>concursadoContratado</title>
        	</head>
<body>
<header><h1>RESPOSTA DO CONCURSADO CONTRATADO</h1></header>
<article><p>Os dados formuláiro foram enviados.</p>

<href="./NetBeansProjects/index.html">VOLTAR AO INÍCIO</a>
</article>
</body>
<caption>
form("Content-type: file/txt");
echo $Cadastrado;
if (isset($_POST['submit'])){
<label>CPF</label>
<input $Id_CPF=htmlspecialchars($_POST['CPF'])>
<label>NOME</label>
<input $Id_Nome=htmlspecialchars($_POST['Nome'])>
<label>IDADE</label>
<input $Id_Idade=htmlspecialchars($_POST['Idade'])> 
<lable>IDENTIDADE</label>
<input $Id_Identidade=htmlspecialchars($_POST['Identidade'])>

(response)
<caption><form>
<label>CPF</label>
<input $Id_CPF=htmlspecialchars($_POST['CPF'])>
<label>NOME</label>
<input $Id_Nome=htmlspecialchars($_POST['Nome'])>
<label>IDADE</label>
<input $Id_Idade=htmlspecialchars($_POST['Idade'])> 
<lable>IDENTIDADE</label>
<input $Id_Identidade=htmlspecialchars($_POST['Identidade'])>
</form>};
</caption>
</body>
?>
</html>
