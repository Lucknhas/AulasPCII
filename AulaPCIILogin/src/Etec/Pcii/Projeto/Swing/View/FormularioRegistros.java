package Etec.Pcii.Projeto.Swing.View;

import java.awt.Container;

import javax.swing.*;
import Etec.Pcii.Projeto.Persistence.AlunoDAO;
import Etec.Pcii.Projeto.Persistence.Conexao;

import java.awt.*;
import java.awt.event.*;
import java.sql.Connection;

public class FormularioRegistros extends JFrame{


	private JLabel lblNmAluno = new JLabel("Nome");	
	private JLabel lblRm = new JLabel("RM");
	private JButton btnConsultar = new JButton("Consultar");
	private JButton btnCadastrarAlunos = new JButton("Cadastrar Alunos");
	
    public FormularioRegistros() {
		
		super("Alunos Registrados");
        Container tela = getContentPane();
        setLayout(null);
        
        lblNmAluno.setBounds(63,30,150,20);
        lblRm.setBounds(133,30,150,20);
        btnConsultar.setBounds(75,190,100,30);
        btnCadastrarAlunos.setBounds(60,230,180,30);
        
        btnCadastrarAlunos.addActionListener(
                new ActionListener(){
                	public void actionPerformed(ActionEvent e){
                    
                        	FormularioAluno app = new FormularioAluno();
                        	setVisible(false);
                 	        app.setVisible(true);
                        
                }});
        /*
        try {
			btnConsultar.addActionListener(
			        new ActionListener(){
			        	
			        	Connection conn = new Conexao().getMysqlConnection();
			           
			        	@Override
						public void actionPerformed(ActionEvent e){
			                          			            
			            AlunoDAO alnDAO = new AlunoDAO(this.conn);
			            
			            alnDAO.registros();              
			                          
			        }});
		} catch (Exception e) {
			e.printStackTrace();
		}
        */
        tela.add(lblNmAluno);
        tela.add(lblRm);
        tela.add(btnConsultar);
        tela.add(btnCadastrarAlunos);
        
        setSize(270,370);
        setVisible(true);
        setLocationRelativeTo(null);
	
    }
}