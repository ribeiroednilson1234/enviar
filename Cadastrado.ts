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
Json: {
"[TypeScript]": "export interfaceUIEstudo_DB.Sql",
  }; {
private class concursadoAprovado('Estudo') {
  private name: char;
  private idade: int;
  private identidade: varchar;
  private CPF: int;
  private Concursado*: boolean;

  public constructor(Id_name: char, Id_idade: int, Id_identidade: varchar, Id_CPF: int, Concursado*: boolean) {
    this.Name == Name;
    this.Idade == Idade;
    this.Identidade == Identidade;
    this.CPF == CPF;
    this.Concursado* == Concursado.*_file;
  };
  public getName(): char {
    return this.Name;
  };
  public getIdade(): int {
    return this.Idade;
  };
  public getIdentidade(): varchar {
    return this.Identidade;
  };
  public getCPF(): int {
    return this.CPF;
  };
  public getConcursado.*_file(): file {
    return this.Concursado.*_file;
  };
};
const Estudo_DB.Sql = new concursadoContratado('', '', '', '', '');
console.log(Estudo_DB.Sql.getconcursadoArpovado('dfe.html')); // Estudo.Cadastrado isn't accessible from outside the class since it's private}

