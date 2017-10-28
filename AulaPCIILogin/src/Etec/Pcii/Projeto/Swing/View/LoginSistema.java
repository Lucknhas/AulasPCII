package Etec.Pcii.Projeto.Swing.View;

import Etec.Pcii.Projeto.Escola.App;
import Etec.Pcii.Projeto.Model.Login;
import Etec.Pcii.Projeto.Persistence.LoginDAO;
import Etec.Pcii.Projeto.Swing.View.FormularioAluno;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.sql.Connection;
import java.util.List;

public class LoginSistema extends JFrame{

	private JLabel lblUsuario = new JLabel("Usuario");	
	private JLabel lblSenha = new JLabel("Senha");
	public static JTextField txtUsuario =  new JTextField("",50);
	public static JTextField txtSenha  =  new JTextField("",50);
	private JButton btnLogar= new JButton("Logar");
	private App app;
	
	public LoginSistema(App app) {
		
		super("Login");
        Container tela = getContentPane();
        setLayout(null);
        
        this.app = app;
        
        lblUsuario.setBounds(60,30,120,20);
        lblSenha.setBounds(60,100,120,20);
        txtUsuario.setBounds(60,60,120,20);
        txtSenha.setBounds(60,130,120,20);
        btnLogar.setBounds(40,190,170,20);
        
       
        
      btnLogar.addActionListener(
            new ActionListener(){
            	public void actionPerformed(ActionEvent e){
                            		   	    
            		App app2 = LoginSistema.this.app;
            		List<Login> login2 = LoginSistema.this.app.getLogin();
            		
            		for (Login l : LoginSistema.this.app.getLogin()) {
            			
    					if(l.getLoginUsuario().equals(txtUsuario.getText()) && l.getLoginSenha().equals(txtSenha.getText())) {
    						LoginSistema.this.app.getLoginLogados().add(l);
    						
    						FormularioAluno app = new FormularioAluno();
                 	        app.setVisible(true);
                 	        setVisible(false);
    					
    						//JOptionPane.showMessageDialog(null, "Bem Vindo");
                 	        
    					}
    					else{
    						
    						//JOptionPane.showMessageDialog(null,"Usuario ou Senha nao conferem!!!");
    						txtUsuario.setText("");
    						txtSenha.setText("");
    						
    					}
    					
    					
    					
    				}
            }});
		
        tela.add(lblUsuario);
        tela.add(lblSenha);
        tela.add(txtUsuario);
        tela.add(txtSenha);
        tela.add(btnLogar);
        
        setSize(260,280);
        setVisible(true);
        setLocationRelativeTo(null);
        
        
	}
	
}
