/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.bean;

import br.com.dao.DenuncianteDAO;
import br.com.dao.OcorrenciaDAO;
import br.com.entity.Denunciante;
import br.com.entity.Ocorrencia;
import br.com.rn.OcorrenciaRN;
import br.com.util.Util;
import java.util.List;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import javax.faces.context.FacesContext;
import javax.swing.JOptionPane;

/**
 *
 * @author Jhonatan
 */
@ManagedBean
@RequestScoped
public class OcorrenciaBean {

    private Denunciante d = new Denunciante();
    private Ocorrencia o = new Ocorrencia();
    private final OcorrenciaDAO dao = new OcorrenciaDAO();
    private final DenuncianteDAO daoD = new DenuncianteDAO();
    private final OcorrenciaRN rnO = new OcorrenciaRN();
    private List<Ocorrencia> ocorrencias;

    public OcorrenciaBean() {
        Util.lerDaSessao("denunciante");
    }

    public Denunciante getD() {
        return d;
    }

    public void setD(Denunciante d) {
        this.d = d;
    }

    public Ocorrencia getO() {
        return o;
    }

    public void setO(Ocorrencia o) {
        this.o = o;
    }

    public String salvar() {
        o.setDenunciante_id(d.getId());

        if (rnO.salvar(o)) {
            JOptionPane.showMessageDialog(null, "Salvo com sucesso!",
                    "Message", JOptionPane.INFORMATION_MESSAGE);
//            FacesMessage fm = new FacesMessage(FacesMessage.SEVERITY_INFO, "Cadastrado com sucesso!", "");
//            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "/inicio.xhtml";
        } else {
            FacesMessage fm = new FacesMessage(FacesMessage.SEVERITY_ERROR, "Erro ao salvar!", "");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return null;
        }
    }

    public String cancelar() {
        if (daoD.deletar(d) && dao.deletar(o)) {
        } else {
            FacesMessage fm = new FacesMessage(FacesMessage.SEVERITY_ERROR, "Erro ao cancelar!", "");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            System.out.println("Erro ao cancelar ocorrencia");
            return null;
        }
        return "/inicio.xhtml";
    }

    public List<Ocorrencia> getOcorrencias() {
        ocorrencias = dao.obterTodos();
        return ocorrencias;
    }
   
}
