/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.teste;

import br.com.dao.OcorrenciaDAO;
import br.com.entity.Ocorrencia;
import java.util.List;

/**
 *
 * @author Jhonatan
 */
public class TesteOcorrenciaDAO {

    public static void main(String[] args) {
        OcorrenciaDAO dao = new OcorrenciaDAO();
        Ocorrencia o = new Ocorrencia();
//        Denunciante d = new Denunciante();

//        o.setId(null);
//        o.setBairro("dbbd");
//        o.setBens("dscacabbd");
//        o.setClassificacao("ada");
//        o.setDenunciante_id(1);
//        o.setDescricaoAssaltante("efhsdvdjv");
//        o.setDescricaoAssalto("dvefhsdvdjv");
//
//        if (dao.inserir(o)) {
//            System.out.println("Inserido OK");
//        } else {
//            System.out.println("Erro");
//        }
        List<Ocorrencia> lista = dao.obterTodos();
        for (Ocorrencia ocorrencia : lista) {
            System.out.println(ocorrencia.getBairro());
        }
    }
}
