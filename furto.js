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
%>
function Aviso(){
alert("SE VOCÊ VIOLOU PRINCÍPIOS DE SEGURANÇA DE REDE.\n\nE ESTÁ COMPROVADO QUE HOUVE FURTO DE PARTES DO CÓDICO DE PROGRAMAS PARA WEB IMAGEN PROPRIETÁRIA."\n
"A COMUNIDADE LINUX NOTIFICA QUE REPUDIA ESTE TIPO DE ATITUDE."\n\n"NO BRASIL O TRÁFEGO CONFIRMADO COMO INVASÃO DE REDE COM MANIPULAÇÃO DE IMAGEM PELO PROTOCOLO UDP É CRIME PREVISTO NO CODIGO PENAL BRASILEIRO."\n"Alterações feitas na Lei penal sancionada pelo ministro do Supremo Tribunal Federal: Dias Tofoli.");
}
%>