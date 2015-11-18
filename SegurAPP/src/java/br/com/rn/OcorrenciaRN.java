/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.rn;

import br.com.dao.OcorrenciaDAO;
import br.com.entity.Ocorrencia;

/**
 *
 * @author Jhonatan
 */
public class OcorrenciaRN {

    private final OcorrenciaDAO dao = new OcorrenciaDAO();

    public boolean salvar(Ocorrencia o) {
        if (o.getId() == null) {
            return dao.inserir(o);
        } else {
            return dao.editar(o);
        }
    }

}
