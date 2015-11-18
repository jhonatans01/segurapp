/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.entity;

/**
 *
 * @author Jhonatan
 */
public class Ocorrencia {

    private Integer id;
    private Integer denunciante_id;
    private String descricaoAssalto;
    private String descricaoAssaltante;
    private String bairro;
    private String classificacao;
    private String bens;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getDenunciante_id() {
        return denunciante_id;
    }

    public void setDenunciante_id(Integer denunciante_id) {
        this.denunciante_id = denunciante_id;
    }

    public String getDescricaoAssalto() {
        return descricaoAssalto;
    }

    public void setDescricaoAssalto(String descricaoAssalto) {
        this.descricaoAssalto = descricaoAssalto;
    }

    public String getDescricaoAssaltante() {
        return descricaoAssaltante;
    }

    public void setDescricaoAssaltante(String descricaoAssaltante) {
        this.descricaoAssaltante = descricaoAssaltante;
    }

    public String getBairro() {
        return bairro;
    }

    public void setBairro(String bairro) {
        this.bairro = bairro;
    }

    public String getClassificacao() {
        return classificacao;
    }

    public void setClassificacao(String classificacao) {
        this.classificacao = classificacao;
    }

    public String getBens() {
        return bens;
    }

    public void setBens(String bens) {
        this.bens = bens;
    }

    @Override
    public String toString() {
        return "Ocorrencia{" + "id=" + id + ", denunciante_id=" + denunciante_id + ", descricaoAssalto=" + descricaoAssalto + ", descricaoAssaltante=" + descricaoAssaltante + ", bairro=" + bairro + ", classificacao=" + classificacao + ", bens=" + bens + '}';
    }

}
