try (CloseableHttpAsyncClient httpclient = HttpAsyncClients.createDefault()) {
    // Start the client
    httpclient.start();

    // Execute request
    SimpleHttpRequest request1 = SimpleRequestBuilder.get("http://httpbin.org/get").build();
    Future<SimpleHttpResponse> future = httpclient.execute(request1, null);
    // and wait until response is received
    SimpleHttpResponse response1 = future.get();
    System.out.println(request1.getRequestUri() + "->" + response1.getCode());

    // One most likely would want to use a callback for operation result
    CountDownLatch latch1 = new CountDownLatch(1);
    SimpleHttpRequest request2 = SimpleRequestBuilder.get("http://httpbin.org/get").build();
    httpclient.execute(request2, new FutureCallback<SimpleHttpResponse>() {

        @Override
        public void completed(SimpleHttpResponse response2) {
            latch1.countDown();
            System.out.println(request2.getRequestUri() + "->" + response2.getCode());
        }

        @Override
        public void failed(Exception ex) {
            latch1.countDown();
            System.out.println(request2.getRequestUri() + "->" + ex);
        }

        @Override
        public void cancelled() {
            latch1.countDown();
            System.out.println(request2.getRequestUri() + " cancelled");
        }

    });
    latch1.await();

    // In real world one most likely would want also want to stream
    // request and response body content
    CountDownLatch latch2 = new CountDownLatch(1);
    AsyncRequestProducer producer3 = AsyncRequestBuilder.get("http://httpbin.org/get").build();
    AbstractCharResponseConsumer<HttpResponse> consumer3 = new AbstractCharResponseConsumer<HttpResponse>() {

        HttpResponse response;

        @Override
        protected void start(HttpResponse response, ContentType contentType) throws HttpException, IOException {
            this.response = response;
        }

        @Override
        protected int capacityIncrement() {
            return Integer.MAX_VALUE;
        }

        @Override
        protected void data(CharBuffer data, boolean endOfStream) throws IOException {
            // Do something useful
        }

        @Override
        protected HttpResponse buildResult() throws IOException {
            return response;
        }

        @Override
        public void releaseResources() {
        }

    };
    httpclient.execute(producer3, consumer3, new FutureCallback<HttpResponse>() {

        @Override
        public void completed(HttpResponse response3) {
            latch2.countDown();
            System.out.println(request2.getRequestUri() + "->" + response3.getCode());
        }

        @Override
        public void failed(Exception ex) {
            latch2.countDown();
            System.out.println(request2.getRequestUri() + "->" + ex);
        }

        @Override
        public void cancelled() {
            latch2.countDown();
            System.out.println(request2.getRequestUri() + " cancelled");
        }

    });
    latch2.await();

}
<% @import jakarta.servlet
-- Tratamento para inserir na tabela Contratado --
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
			START TRANSACTION;
			    strComandoSQL = "INSERT INTO  Contratado (ID_CPF, ID_Nome, ID_Idade, ID_Identidade) 
		VALUES('"+strCPF+"', '"+strNome+"', '"+strIdade+"',  '"+strIdentidade+"')";
		
			    strComandoSQL = "INSERT INTO Cadastro (BooleanID_Concursado)
		VALUES ('"+booleanID_Concursado.*_file+"')";
	
			    psComando = conBanco.prepareStatement(strComandoSQL);
			    psComando.executeUpdate();
			    COMMIT;
			    return true;
			}
			catch (Exception erro) {
			orro.printStackTrace();
			return false;
			ROLLBACK;
			}
	}
	
	public boolean alterarRegistro(strCPF_ID, strNome_ID, strIdade_ID, strIdentida_ID) {
	Sting strComandoSQL;
	
			try {
			START TRANSACTION;
			strComandoSQL = "UPDATE Contratado & Cadastro SET ID_CPF  = '"+strCPF+"', '"+strNome+"', '"+strIdade+"', '"+strIdentidade+"' WHERE Contratado = "+intCodigo_id, +varcharCPF_id;
			strComandoSQL = "UPDATE Cadastro SET BooleanID_Concursado  = '"+booleanID_Concursado.*_file"' WHERE Cadastro = "+intCodigo_id, +booleanID_Concursado.*_file;
			
				psComando = conBanco.prepareStatemant(strComandoSQL);
				psComando.executeUpdate();
				COMMIT;
				return true;  
			}
			catch (Excepition erro) {
			erro.printStckTrace();
			return false;
			ROLLBACK;
			}
	}
	public boolean excluirRegistro (int intCodigo){
		String strComandoSQL;
		
		try {
		START TRANSACTION;
			strComandoSQL = "DELETE FROM Contratado WHERE strID_CPF = "+intCodigo, +varcharID_CPF;
				psComando = conBanco.prepareStatemant(strComandoSQL);
				psComando.executeUpdate();
				COMMIT;
				return true;
		}
			catch (Exception erro) {
			erro.printStackTrace();
			return false;
			ROLLBACK;
			}
} 
	puclic ResultSet listarRegistros(String strOrdem) {
	String strComandoSQL;
		
		try {
		START TRANSACTION;
		    if (strOrdem == "Contratado")
		    	strComandoSQL = "SELECT Contratado FROM intID_CPF ORDER BY ASC strID_Nome";
		    If (strOrdem == "Cadastro")	
		    	strComandoSQL = "SELECT Cadastro FROM booleanID_Concursado ORDER BY ASC strID_Name";
		    else
		    	strComandoSQL = "SELECT Contratado FROM strID_Nome ORDER BY strID_Identidade";
		    	strComandoSQL = "SELECT Cadastro FROM booleanID_Concursado.*_file ORDER BY booleanID_Concursado.*_file";
		    	COMMIT;
		    	psComando = conBanco.prepareStatement(strComandoSQL);
		    	rsRegistros = psComando.executeQuery();
		    	return rsRegistros;
		    			    
		}
		catch (Exception erro) {
			erro.printStackTrace();
			return null;
			ROOLBACK;
		}
	}	
}
%>
