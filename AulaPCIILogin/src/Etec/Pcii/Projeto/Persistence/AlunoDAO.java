package Etec.Pcii.Projeto.Persistence;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;

import Etec.Pcii.Projeto.Model.Aluno;
import Etec.Pcii.Projeto.Model.Pessoa;
import Etec.Pcii.Projeto.Model.Login;

public class AlunoDAO <T extends Aluno>implements IDAO<T>{

Connection conn;
	
	public AlunoDAO(Connection conn){
		this.conn = conn;
	}
	
	@Override	
	public void inserir(T o){
		
		try {

			String sqli = "insert into aluno (aluno,rm) values ('" +((Aluno)o).getNome()+"','" +((Aluno)o).getRm()+ "')";
			
			//System.out.println(sqli);

			PreparedStatement stm = conn.prepareStatement(sqli);
	
	    	stm.executeUpdate();	
	    	
	    	System.out.println(conn);
    	
		}
		catch(SQLException inserirexsql)
		{
			inserirexsql.printStackTrace();
		}
	}


	@Override
	public List listar() throws Exception {
		// TODO Auto-generated method stub
		return null;
	}

	/*
	public void registros() {
		
		try {
			
			String sql = "select * from aluno";
			
			PreparedStatement stm = conn.prepareStatement(sql);
	
	    	ResultSet rs = stm.executeQuery();
	    	while(rs)
	    	
	    	System.out.println();
				
		}
		catch(SQLException registrosexsql)
		{
			registrosexsql.printStackTrace();
		}
		
	}*/
		
}