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
﻿<%
//Para filtrar nome em aprovação lista de concurso realizado pelas bancas examinadores no Brasil.
import java.util.List;
import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class filtrarnome.Filter {
	public static void main(Sting[]args){
	List<Boolean> CADASTRO = Arrays.asList(ID_Nome, ID_Idade, ID_Identidade, ID_CPF);
System.out.println(CADASTRO);
	}
}
private class Estudo_DB {
	private static void main(Sting[] args){
		Scanner scanner = new Scanner (System in);
boolean CADASTRO = 0;
CADASTRO = scanner.nextBoolean();

   switch (CADASTRO){
	case 1:
	var let nome = ["Nome"];
	function filtrarNome(elem, ind, obj){
	return (typeof elem = "*");
    	nome.CADASTRO(filtrarNome); // informa o nome
alert(<in nome);
	}; break;
    
	case 2:
	var idade = ["Idade"];
	function filtrarIdade(elem, ind, obj){
	return ((typeof elem = "*");
    	idade.CADASTRO(filtrarIdade); // informa a idade igual
alert(<in idade);
	}; break;
	
	case 3:
	var identidade = ["Identidade"];
	function filtrarIdentidade(elem, ind, obj){
	return ((typeof elem = "*");
    	identidade.CADASTRO(filtrarIdade); // informa números de documentos
alert(<in identidade);
	}; break;
	
	case 4:
	var CPF = ["CPF"];
	function filtrarCPF(elem, ind, obj){
	return ((typeof elem = "*");
    	CPF.CADASTRO(filtrarCPF); // informa números de documentos
alert(<in CPF); break;
	}
 }
}
%>
