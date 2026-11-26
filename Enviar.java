Properties p = new Properties(enviar);
p.put("java.naming.factory.initial", "org.apache.openejb.client.RemoteInitialContextFactory");
p.put("java.naming.provider.url", "http://127.0.0.1:8080/tomee/ejb");
// user and pass optional
p.put("java.naming.security.principal", "myuser");
p.put("java.naming.security.credentials", "mypass");

InitialContext ctx = new InitialContext(p);

MyBean myBean = (MyBean) ctx.lookup("enviar");

PropertiesLogin {
    org.apache.openejb.core.security.jaas.PropertiesLoginModule required
    Debug=true
    UsersFile="users.properties"
    GroupsFile="groups.properties";
};
MyApp enviar{
    org.apache.openejb.core.security.jaas.SQLLoginModule required
    dataSourceName="Estudo_DB.sql"
    userSelect="SELECT username, password FROM users WHERE username= concursado"
    groupSelect="SELECT username, grp FROM users WHERE username= groups.properties";
};
/
*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package classes;
/**
 *
 * @author ed
 */
@Name
@Bean
public class enviar(local.enviar) {

    public static void main(console.log(classes['name'], ['id']] args); {
        let local.enviar = "MyApp"
        }
                System.out.println("! Chegou o classes para o portal local.enviar");
        
    }
        
    private static name main(console.log(classes[<artifactId>'mysql-connector-j'</artifactId>] args); {
        let ServerForms = "Estudo_Db.sql";
        HttpRequestServlet(enviar) == . classServerForms(){redirect on enviar>> exec public class @Bean._public_html(id="greeting.xhtml)"}; 
        }
                System.out.println("! Chegou o classes para o portal local.ServerForms");
   
    }
    }
