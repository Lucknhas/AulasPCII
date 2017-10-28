package Etec.Pcii.Projeto.Persistence;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import Etec.Pcii.Projeto.Model.Login;
import Etec.Pcii.Projeto.Persistence.IDAO;
import Etec.Pcii.Projeto.Model.vGlobal;

public class LoginDAO <T extends Login>implements IDAO<T> {

Connection conn;
	
	public LoginDAO(Connection conn){
		
		this.conn = conn;
	}
	
	@Override	
	public void inserir(T o) throws Exception{
		

		try {

			String sqli = " insert into login (usuario, senha) values ('" +((Login)o).getLoginUsuario()+"','" +((Login)o).getLoginSenha()+ "') ";
			
			//System.out.println(sqli);
			
			PreparedStatement stm = conn.prepareStatement(sqli);
	
	    	stm.executeQuery(sqli);	
    	
		}
		catch(SQLException inserirexsql)
		{
			inserirexsql.printStackTrace();
		}
	}
	
	@Override
	public List listar() throws Exception {
		
		List<Login> listaLogin = new ArrayList<>();
		vGlobal vg = new vGlobal();
		String Usu = vg.vUsuario();
		String Sen = vg.vSenha();
		PreparedStatement prepareStatement = conn.prepareStatement(" select * from login where usuario = '"+Usu+"' and senha ='"+Sen+"' ");
		ResultSet rs = prepareStatement.executeQuery();
	
		while (rs.next()){
		
			String loginUsuario = rs.getString("usuario");
			String loginSenha = rs.getString("senha");
			Login log = new Login(loginUsuario, loginSenha);
			listaLogin.add(log);
		}	
		
		return listaLogin;
	}
}