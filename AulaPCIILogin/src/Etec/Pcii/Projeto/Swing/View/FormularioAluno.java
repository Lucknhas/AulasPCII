package Etec.Pcii.Projeto.Swing.View;
import Etec.Pcii.Projeto.Model.Aluno;
import Etec.Pcii.Projeto.Persistence.AlunoDAO;
import Etec.Pcii.Projeto.Persistence.Conexao;

import javax.swing.*;

import java.awt.*;
//import java.awt.event.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;

public class FormularioAluno extends JFrame {

	private JLabel lblNmAluno = new JLabel("Insira o nome do aluno");	
	private JLabel lblRm = new JLabel("Insira o rm do aluno");
	private JTextField txtNmAluno  =  new JTextField("",50);
	private JTextField txtRm  =  new JTextField("",50);
	private JButton btnRegistrar = new JButton("Registrar");
	private JButton btnAlunosRegistrados = new JButton("Registro de Alunos");
	
	public FormularioAluno() {
				
		super("Cadastro de Nomes");
        Container tela = getContentPane();
        setLayout(null);
        
        lblNmAluno.setBounds(63,30,150,20);
        lblRm.setBounds(63,100,150,20);
        txtNmAluno.setBounds(50,70,150,20);
        txtRm.setBounds(50,130,150,20);
        btnRegistrar.setBounds(75,190,100,30);
        btnAlunosRegistrados.setBounds(40,250,180,30);
        
        try {
			btnRegistrar.addActionListener(
			        new ActionListener(){
			        	
			        	Connection conn = new Conexao().getMysqlConnection();
			           
			        	@Override
						public void actionPerformed(ActionEvent e){
			                          
			            Aluno aln = new Aluno(txtNmAluno.getText(), txtRm.getText()); 
			            
			            aln.setNome(txtNmAluno.getText());
			            aln.setRm(txtRm.getText());
			            
			            AlunoDAO alnDAO = new AlunoDAO(this.conn);
			            
			            alnDAO.inserir(aln);              
			                             
			        }});
		} 
        catch (Exception e)
        {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
        
        try {
        	btnAlunosRegistrados.addActionListener(
        			new ActionListener(){
        				public void actionPerformed(ActionEvent e){
        					
        					FormularioRegistros lst = new FormularioRegistros();
                        	setVisible(false);
        					
        			}});
        }
        catch (Exception a)
        {
        	a.printStackTrace();
        }
        
        
        tela.add(lblNmAluno);
        tela.add(lblRm);
        tela.add(txtNmAluno);
        tela.add(txtRm);
        tela.add(btnRegistrar);
        tela.add(btnAlunosRegistrados);
        
        setSize(270,370);
        setVisible(true);
        setLocationRelativeTo(null);
	}
	
}
