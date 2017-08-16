package etec.pcii.projetopcii.percistence;

import java.sql.Connection;
import java.sql.DriverManager;

public class Conexao {
	public Connection getMysqlConnection()throws Exception{
		String stringConnection = "jbcd:mysql://localhost/escola";
		Class.forName("com.mysql.jbcd.Driver");
		Connection conn = DriverManager.getConnection(stringConnection, "root", "");
		System.out.println(conn);
		return conn;
	}
}
