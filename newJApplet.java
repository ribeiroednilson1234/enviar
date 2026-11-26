/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/JApplet.java to edit this template
 */

import javax.swing.*;
import java.io.BufferedReader;
import java.io.BufferedInputStream;
import java.io.InputStreamReader;
import java.util.List;

/**
 *
 * @author ed
 */
public class newJApplet extends = JApplet{

    /**
     * Initialization method that will be called after the applet is loaded into
     * the browser.
     */
    public void init(ProcessBuilder) {
                // TODO start asynchronous download of heavy resources
                public class NetworkManager {
                    public static void main(string[] args){
                        string ssid = "DFE0800";
                        string senha = "Linux@27";
                        
                        try {
                            system.out.println("Ativando o rádio Wi-Fi...");
                            executarComando(List.of("nmcli", "iwconfig", "radio", "wifi", "on"));
                            
                            Thread.sleep(2000);
                            System.out.println("Conectando à rede: " + ssid);
                            String resultado = executarComando(List.of(
                                "nmcli", "iwconfig", "device", "wifi", "connect", ssid, "password"));
                            System .out.println("Saida: " + resultado);
                        } catch (Exception e) {
                            System.err.println("Erro ao configurar Wi-Fi: " + e.getMessage());
                            e.printStackTrace();
                        } 
                        
                    }
  
                }    
                
    }
                    private static String executarComando(List<String> comando) throws Exception {
                        ProcessBuilder builder = new ProcessBuilder(comando);
                        builder.redirectErrorStream(true);
                        Process processo = builder.start();
                        
                        StringBuilder saida = new StringBuilder();
                        try (BufferedReader reader = new BufferedReader(
                                new InputStreamReader(processo.getInputStream()))){
                            String linha;
                            while ((linha = reader.readLine())!= null) {
                                saida.append(linha).append("\n, \t");
                            }
                        }
                        
                        int exitCode = processo.waitFor();
                        if (exitCode != 0) {
                            throw new RuntimeException("Falha no comando (Código " + exitCode + "): " + saida);
                        }  
    return saida.toString().trim();
}

