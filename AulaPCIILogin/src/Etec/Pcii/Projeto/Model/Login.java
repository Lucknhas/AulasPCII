package Etec.Pcii.Projeto.Model;


public class Login {
	
private String loginUsuario;	
private String loginSenha;

public Login(String loginUsuario,String loginSenha) {

	this.loginUsuario = loginUsuario;
	this.loginSenha = loginSenha;
}
	
	public String getLoginUsuario() {
		return loginUsuario;
	}
	
	public void setLoginUsuario(String loginUsuario) {
		this.loginUsuario = loginUsuario;
	}
	
	public String getLoginSenha() {
		return loginSenha;
	}

	public void setLoginSenha(String loginSenha) {
		this.loginSenha = loginSenha;
	}

}