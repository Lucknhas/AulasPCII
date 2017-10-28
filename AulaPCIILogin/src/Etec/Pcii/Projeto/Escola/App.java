package Etec.Pcii.Projeto.Escola;

import Etec.Pcii.Projeto.Model.Login;
import Etec.Pcii.Projeto.Persistence.LoginDAO;
import Etec.Pcii.Projeto.Swing.View.FormularioAluno;
import Etec.Pcii.Projeto.Swing.View.LoginSistema;
import Etec.Pcii.Projeto.Model.Pessoa;
import Etec.Pcii.Projeto.Model.Aluno;
import Etec.Pcii.Projeto.Persistence.Conexao;
import Etec.Pcii.Projeto.Persistence.AlunoDAO;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.sql.Connection;
import java.util.List;
import javax.swing.JFrame;
			

public class App {
	
	private List<Login> loginCadastro = new ArrayList<Login>();
	private List<Login> loginLogado = new ArrayList<Login>();
	private Login loginAtual;
	
	public App() throws Exception {
		
	//falta encontrar alguma maneira de preencher esta lista através de um select dos usuários do banco
		this.loginCadastro.add(new Login("admin", "123456"));
	}
	
	public List<Login> getLogin() {
	
		Connection connec;
		List listagemLogin = null;
		
	try {
		
		connec = new Conexao().getMysqlConnection();
		LoginDAO listagem = new LoginDAO(connec);
		listagemLogin = listagem.listar();
	} 
	catch (Exception e) {
		
		e.printStackTrace();
	}
	return listagemLogin;
}

	public Login getLoginAtual() {
		
		return loginAtual;
	}

	public void setLoginAtual(Login loginAtual) {
		this.loginAtual = loginAtual;
	}

	public List<Login> getLoginLogados() {
		return loginLogado;
	}

	public void setLoginLogados(List<Login> loginLogado) {
		this.loginLogado = loginLogado;
	}
	
    public static void main( String[] args ) throws Exception
    {
    	
    	App program = new App();    	
    	new App(); 
	      
		LoginSistema lgn = new LoginSistema(program);
		lgn.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	        
    	Connection conn = new Conexao().getMysqlConnection();
        
    	LoginDAO lgnDAO = new LoginDAO(conn);
        AlunoDAO alnDAO = new AlunoDAO(conn);
			
        	/*
			FormularioAluno app = new FormularioAluno();
		    app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
			
	       	App program = new App();    	
	    	new App();    	
	    	Connection conn = new Conexao().getMysqlConnection();
	    	ConexaoDao = new AlunoDAO(conn);
	    	
	    	Pessoa pessoa1 = new Aluno("Abel","qwe");
	    	
	    	String inserirNovo = "insert into aluno (nome,rm) values ('NomeAluno77','123')";

	    	PreparedStatement prepareStatementUm = conn.prepareStatement(inserirNovo);
	    	
	    	prepareStatementUm.execute();*/

    }
}
