/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.bean;

import br.com.dao.DenuncianteDAO;
import br.com.entity.Denunciante;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import javax.faces.context.FacesContext;

/**
 *
 * @author Jhonatan
 */
@ManagedBean
@RequestScoped
public class DenuncianteBean {

    private final DenuncianteDAO dao = new DenuncianteDAO();
    private Denunciante d = new Denunciante();

    public DenuncianteBean() {
    }

    public Denunciante getD() {
        return d;
    }

    public void setD(Denunciante d) {
        this.d = d;
    }

    public String salvar() {
        if (dao.inserir(d)) {
            return "/abrirOcorrencia2.xhtml";
        } else {
            FacesMessage fm = new FacesMessage(FacesMessage.SEVERITY_ERROR, "Erro ao cadastrar!", "");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return null;
        }
    }

    public String salvarEdit() {
        if (dao.editar(d)) {
            return "/inicio.xhtml";
        } else {
            FacesMessage fm = new FacesMessage(FacesMessage.SEVERITY_ERROR, "Erro ao cadastrar!", "");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return null;
        }
    }

}
