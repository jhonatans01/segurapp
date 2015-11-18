/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.teste;

import br.com.dao.DenuncianteDAO;
import br.com.entity.Denunciante;

/**
 *
 * @author Jhonatan
 */
public class TesteDenuncianteDAO {

    public static void main(String[] args) {
        DenuncianteDAO dao = new DenuncianteDAO();
        Denunciante d = new Denunciante();

        d.setId(null);
        d.setNome("djkdsvnf");
        d.setTelefone("398543");
        d.setEmail("dksjd@sjgndfkjdnsb.csdvnkj");

        if (dao.inserir(d)) {
            System.out.println("Inserido");
        } else {
            System.out.println("Erro ao inserir");
        }
    }
}
