
package Etec.Pcii.Projeto.Model;

import Etec.Pcii.Projeto.Swing.View.LoginSistema;
import Etec.Pcii.Projeto.Escola.App;

public class vGlobal  {
	
	public static String txtUsuarioGlobal;
	public static String txtSenhaGlobal;
	private App app;
	
	LoginSistema lgs = new LoginSistema(app);
	
	
	public String vUsuario() throws Exception{
		
		txtUsuarioGlobal = lgs.txtUsuario.getText();
		return txtUsuarioGlobal; 
	}
	
	public String vSenha() throws Exception{
		
		txtSenhaGlobal = lgs.txtSenha.getText();
		return txtSenhaGlobal;   
	}
}
