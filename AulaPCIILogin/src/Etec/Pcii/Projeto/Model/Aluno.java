package Etec.Pcii.Projeto.Model;

import Etec.Pcii.Projeto.Model.Pessoa;

public class Aluno extends Pessoa{
	
	private String rm;
	
	public Aluno(String nome, String rm) {
		super(nome);
		this.rm = rm;

	}
	
	public String getRm() {
		return rm;
	}

	public void setRm(String rm) {
		this.rm = rm;
	}

}

