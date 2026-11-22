import java.io.File;
import java.io.IOException;
import java.io.RandomAccesFile;
import javax.servlet.ServletExeption;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import jakarta.io.seriarizable;
import jakarta.faces.application.FacesMessage;
import jakarta.faces.context.FacesContext;
import jakarta.enterprise.context.RequestScoped;
import jakarta inject.Named;
import jakarta.ws.rs.Path;
import com.exemplo.model.UserBean;

import java.util.ArraysList;
import java.util.List;

try (CloseableHttpAsyncClient httpclient = HttpAsyncClients.createDefault()) {
    // Start the client
    httpclient.start();
// ExecuÁ„o de requisiÁıes HTTP usando API assincrona HttpClient 
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

@Path("/users")
@Named
@ViewScoped
@RequestScoped
public class UsuarioBean(ServerForms){

	private string Pais
	private string Estado;
	private string Cidade;
	private string Bairro;
	
	public string salvar() {
	   System.out.println("Pais: " + this.Pais);
	   System.out.println("Estado: " + this.Estado);
	   System.out.println("Cidade: " + this.Cidade);
	   System.out.println("Bairro: " + this.Bairro);
	   
	   return "sucesso?faces-redirect=true";
	}

	public String getPais() {
		return Pais;
	}

	public void setPais(String Pais) {
		this.Pais= Pais;
	}

	public String getEstado() {
		return Estado;
	}

	public void setEstado(String Estado) {
		this.Estado= Estado;
	}

	public String getCidade() {
		return Cidade;
	}

	public void setCidade(String Cidade) {
		this.Cidade= Cidade;
	}

	public String getBairro() {
		return Bairro;
	}

	public void setBairro(String Bairro) {
		this.Bairro= Bairro;
	}
}
</servlet>
 <servlet-mapping>
     <servlet-name>ServerForms</servlet-name>
     <url-pattern>*.xhtml</url-pattern>
</servlet-mapping>
<welcome-file-list>
     <welcome-file>confirma_dfe3.xhtml</welcome-file>
</welcome-file-list>
</web-app>
<?xml version="1.0" encoding="UTF-8"?>
<!Doctye html>
<html xmlns="http://w3.org"
  xmlns:f="http://jcp.org"
  xmlns:f="jakarta.faces.core"
  xmlns:h="jakarta.faces.html"
  xmlns:p="jakarta.faces.passthrough">
	<h:head>
	<meta name="keywords" content="HTML, CSS, JAVASCRIPT, PHP"/>
        <meta name="ENVIAR" content="p√°gina web conjunto de imagens"/>
        <meta author="Ednilson Alves" properly="Republica Federativa do Brasil" content="Licen√ßa_Prolerly"/>
        <meta name="viewport" content="width=device-width, initial-scale=2.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="refresh" content="30"/>
	<meta charset="utf-8" lang="Pt-Br"/>
	<meta author="Ednilson" date="202610"/>
	<outputStylesheet library="css" name="./ServerForms/test/dfe.css"/>
        <title>CONFIRMA O FORMULARIO DFE0803</title>
	</h:head>
<h:body style="color: lightBlue">

	<h:header><h1>CONFIRMA O FORMUL√ÅRIO DFE0803</h1></h:header>

<h:messages globalOnly="false" style="color:lightGray;" />

<h:panelGrid columns="1">

  <h:caption>
  <h3>Opera√ß√£o bem sucedida dados gravados</h3>
  <p>Agradecimentos<h:outputText value="#{usuarioBean.nome}" />.</p>
  <h:link outcome="#/public_html/greeting.xhtml" value="Voltar para o IN√çCIO" />
  </h:caption>
</h:panelGrid>
<h:footer><h:div class="rodape">&copy2026-Direitos Reservados-Licen√ßa Properly</h:div></h:footer>
</h:body>
</html>
}
