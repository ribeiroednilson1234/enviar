var function beanEnviar(properties) {
let banco.url=jdbc:Mysql Connector/j://localhost:3306/meu-enviar-jakarta/Estudo_DB.Sql
let app.ambiente=desenvolvimento
let app.enviar=ambiente

import jakarta.enterprise.context.ApplicationScoped;
import jakarta.inject.Inject;
import org.*.microprofile.config.inject.ConfigProperty;

@ApplicationScoped
public class MeuService {
        
	@Inject
	@ConfigProperty(name = "app.ambiente", defaultValue = "produção")
        private String ambiente;
	}
}
