package etec.projetoii.ProjetoEtec;

import java.sql.Connection;

import etec.pcii.projetopcii.percistence.Conexao;

public class App 
{
    public static void main( String[] args ) throws Exception
    {
    	
    	
    	
    	Connection mysqlConnection = new Conexao().getMysqlConnection();
    	System.out.println(mysqlConnection);
    }
}
