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
<% import jakarta.Servlet.*" %>
<% import jakarta.servlet.http.* %>
<% impot jakarta.servlet.ServletException %>
<% impot java.io.IOException %>
@WebServlet("/enviar.com")
public class EnviarServlet extends HttpServlet {
	@Override
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
		throws ServletException, IOException {
	 response.getWriter().write("BEM VINDO AO PORTAL ENVIAR !");
		
		}
}
<% @ page import="java.util.Data" %>
<% @ pag import="java.text.SimpleDateFormat" %>
<% @ page language="contentType=text/html" %>
<% @ page include file="//home/ed/Campanha/enviar/DB/Estudo_DB.Sql"%>
<jsp:include page="//home/ed/Campanha/enviar/java/concursadoContratado.jsp"/>
<% @ taglib "*._tags.jsp" %>
<% @ diretiva %>
<%
String query = sqlReader.carregarSql(Estudo_DB.Sql);
CREATE DATABASE ESCHEMAS ESTUDO; GO
if CONTRATADO{
CREATE TABLE CONTRATADO( PRIMARY KEY id_CPF int(11)[not null],
Idx_Nome_char(50) [not null],
Idade_int(3) [not null],
Identidade_varchar (11) [not null],
Idx_CPF_int(11) [not null],
CREATE INDEX idx_CPF ON CONTRATADO (CPF);
)ENGINE=InnoDB;

INSERT INTO CONTRATADO[(id_Identidade,Nome,Idade,id_CPF)
VALUES('','','','');
GO
};
if CONTRATADO {
CREATE TABLE CADASTRO( FORYGNE KEY id_Nome varchar(18)[not null],
Idx_Nome_char(50) [not null],
Idade_int(3) [not null],
Identidade_varchar(18) [not null],
CPF_int(11) [not null],
Idx_Concursado*() [not null],
CREATE INDEX Idx_Concursado.*, function(Concursado.*) ON CADASTRO (Concursado.*_file);
)ENGINE=MongoDB;

INSERT INTO CADASTRO[(id_Identidade,Nome,Idade,id_CPF,Concursado.*)
VALUES('','','','','');
GO
};
else {
ALTER TABLE CADASTRO ADD/DROP(
id_Identidade_varchar(18)[not null]
Nome_char(50) [not null],
Idade_int(3) [not null],
CPF_int(11) [not null],
CREATE INDEX idx_CPF ON CONTRATADO (CPF);
)ENGINE=InnoDB;
GO
SELECT DISTINCT Nome, Identidade, CPF, Concursado.*_file FROM CADASTRO WHERE ESTUDO ORDER BY asc A-Z, a-Z, a-z, Az;
%>