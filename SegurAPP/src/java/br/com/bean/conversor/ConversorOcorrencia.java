/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.bean.conversor;

import br.com.dao.OcorrenciaDAO;
import br.com.entity.Denunciante;
import br.com.entity.Ocorrencia;
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.convert.Converter;
import javax.faces.convert.FacesConverter;

/**
 *
 * @author Jhonatan
 */
@FacesConverter("ConversorOcorrencia")
public class ConversorOcorrencia implements Converter{
 
    @Override
    public Object getAsObject(FacesContext fc, UIComponent uic, String value) {
        System.out.println("getAsObject " + value);
        OcorrenciaDAO dao = new OcorrenciaDAO();
        Ocorrencia resultado = null;

        try {
            resultado = dao.obterSingle(new Integer(value));
        } catch (NumberFormatException e) {
            System.out.println(e);
        }

        return resultado;
    }

    @Override
    public String getAsString(FacesContext fc, UIComponent uic, Object o) {
        System.out.println("getAsString " + o);
        String resultado = null;

        if (o != null && o instanceof Denunciante) {
            if (((Ocorrencia) o).getId() != null) {
                resultado = ((Ocorrencia) o).getId().toString();
            }
        }

        return resultado;
    }   
}
