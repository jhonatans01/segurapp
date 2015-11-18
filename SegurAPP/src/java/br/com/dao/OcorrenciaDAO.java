/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.dao;

import br.com.entity.Denunciante;
import br.com.entity.Ocorrencia;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Jhonatan
 */
public class OcorrenciaDAO {

    DenuncianteDAO dDao = new DenuncianteDAO();

    public boolean inserir(Ocorrencia o) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "INSERT INTO ocorrencia (denunciante_id, descricaoAssalto, descricaoAssaltante,"
                    + "bairro, classificacao, bens) VALUES (?,?,?,?,?,?)";
            Denunciante d = dDao.obterUltimo();
            PreparedStatement ps = conn.prepareStatement(sql);
//            ps.setInt(1, o.getDenunciante_id().getId().intValue());
            ps.setInt(1, d.getId());
            ps.setString(2, o.getDescricaoAssalto());
            ps.setString(3, o.getDescricaoAssaltante());
            ps.setString(4, o.getBairro());
            ps.setString(5, o.getClassificacao());
            ps.setString(6, o.getBens());
            int i = ps.executeUpdate();
            if (i > 0) {
                return true;
            }

            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    public boolean editar(Ocorrencia o) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "UPDATE ocorrencia SET denunciante_id=?, descricaoAssalto=?"
                    + "descricaoAssaltante=?, bairro=?, classificacao=?, bens=? WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            Denunciante d = dDao.obterUltimo();
            ps.setObject(1, d.getId());
            ps.setString(2, o.getDescricaoAssalto());
            ps.setString(3, o.getDescricaoAssaltante());
            ps.setString(4, o.getBairro());
            ps.setString(5, o.getClassificacao());
            ps.setString(6, o.getBens());

            int i = ps.executeUpdate();
            if (i > 0) {
                return true;
            }

            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    public boolean deletar(Ocorrencia o) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "DELETE FROM ocorrencia WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setInt(1, o.getId());
            int i = ps.executeUpdate();
            if (i > 0) {
                return true;
            }

            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    public List<Ocorrencia> obterTodos() {
        List<Ocorrencia> dados = new ArrayList<>();

        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "SELECT * FROM ocorrencia";
            Statement st = conn.createStatement();
            ResultSet rs = st.executeQuery(sql);
            rs.first();

            if (rs != null) {
                do {
                    Ocorrencia o = new Ocorrencia();
                    o.setId(rs.getInt("id"));
                    o.setDenunciante_id(rs.getInt("denunciante_id"));
                    o.setDescricaoAssalto(rs.getString("descricaoAssalto"));
                    o.setDescricaoAssaltante(rs.getString("descricaoAssalto"));
                    o.setBairro(rs.getString("bairro"));
                    o.setClassificacao(rs.getString("classificacao"));
                    o.setBens(rs.getString("bens"));
                    dados.add(o);

                } while (rs.next());

            } else {
                System.out.println("ERRO");
            }
            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return dados;
    }
    
//    public List<Object> obterTodosOD() {
//        List<Object> dados = null;
//        Ocorrencia o = new Ocorrencia();
//        
//
//        try {
//            Class.forName("com.mysql.jdbc.Driver").newInstance();
//            Connection conn = DriverManager.getConnection(
//                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
//            String sql = "SELECT * FROM denunciante d, ocorrencia o "
//                    + "WHERE d.id = o.denunciante_id";
//            Statement st = conn.createStatement();
//            ResultSet rs = st.executeQuery(sql);
//            rs.first();
//
//            if (rs != null) {
//                do {
//                    d.setId(rs.getInt("id"));
//                    d.setNome("nome");
//                    d.setTelefone("telefone");
//                    d.setEmail("email");
//                    o.setId(rs.getInt("id"));
//                    o.setDenunciante_id(rs.getInt("denunciante_id"));
//                    o.setDescricaoAssalto(rs.getString("descricaoAssalto"));
//                    o.setDescricaoAssaltante(rs.getString("descricaoAssalto"));
//                    o.setBairro(rs.getString("bairro"));
//                    o.setClassificacao(rs.getString("classificacao"));
//                    o.setBens(rs.getString("bens"));
//                    Object object = new Object();
//                    
//                    dados.add((Ocorrencia)o);
//
//                } while (rs.next());
//
//            } else {
//                System.out.println("ERRO");
//            }
//            conn.close();
//        } catch (ClassNotFoundException | SQLException e) {
//            e.printStackTrace();
//        } catch (InstantiationException | IllegalAccessException ex) {
//            ex.printStackTrace();
//        }
//        return dados;
//    }

    public Ocorrencia obterSingle(int id) {
        Ocorrencia o = new Ocorrencia();
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "SELECT * FROM ocorrencia WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();

            if (rs != null) {
                rs.next();
                o.setId(rs.getInt("id"));
                o.setDenunciante_id(rs.getInt("denunciante_id"));
                o.setDescricaoAssalto(rs.getString("descricaoAssalto"));
                o.setDescricaoAssaltante(rs.getString("descricaoAssalto"));
                o.setBairro(rs.getString("bairro"));
                o.setClassificacao(rs.getString("classificacao"));
                o.setBens(rs.getString("bens"));
            } else {
                System.out.println("ERRO");
            }
            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return o;
    }

}
