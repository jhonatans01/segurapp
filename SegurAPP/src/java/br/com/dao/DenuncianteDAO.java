/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.dao;

import br.com.entity.Denunciante;
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
public class DenuncianteDAO {

    public boolean inserir(Denunciante d) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "INSERT INTO denunciante (nome, telefone, email) VALUES (?,?,?)";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setString(1, d.getNome());
            ps.setString(2, d.getTelefone());
            ps.setObject(3, d.getEmail());
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

    public boolean editar(Denunciante d) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "UPDATE denunciante SET nome=?, telefone=?, email=? WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setString(1, d.getNome());
            ps.setString(2, d.getTelefone());
            ps.setObject(3, d.getEmail());
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

    public boolean deletar(Denunciante d) {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "DELETE FROM denunciante WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setInt(1, d.getId());
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

    public List<Denunciante> obterTodos() {
        List<Denunciante> dados = new ArrayList<>();

        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "SELECT * FROM denunciante";
            Statement st = conn.createStatement();
            ResultSet rs = st.executeQuery(sql);
            rs.first();

            if (rs != null) {
                do {
                    Denunciante d = new Denunciante();
                    d.setId(rs.getInt("id"));
                    d.setNome(rs.getString("nome"));
                    d.setTelefone(rs.getString("telefone"));
                    d.setEmail(rs.getString("email"));
                    dados.add(d);
//                    dados.add(new Object[]{rs.getInt("id"),
//                        rs.getString("nome"), rs.getString("endereco"), rs.getString("telefone")});

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

    public Denunciante obterSingle(int id) {
        Denunciante d = new Denunciante();
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "SELECT * FROM denunciante WHERE id=?";
            PreparedStatement ps = conn.prepareStatement(sql);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();

            if (rs != null) {
                rs.next();
                d.setId(rs.getInt("id"));
                d.setNome(rs.getString("nome"));
                d.setTelefone(rs.getString("telefone"));
                d.setEmail(rs.getString("email"));
            } else {
                System.out.println("ERRO");
            }
            conn.close();
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        } catch (InstantiationException | IllegalAccessException ex) {
            ex.printStackTrace();
        }
        return d;
    }
    
    public Denunciante obterUltimo() {
        Denunciante d = new Denunciante();
        try{
        Connection conn = DriverManager.getConnection(
                    "jdbc:mysql://localhost:3306/segurapp", "root", "root12");
            String sql = "SELECT * FROM denunciante ORDER BY id DESC LIMIT 1";
            Statement st = conn.createStatement();
            ResultSet rs = st.executeQuery(sql);
            rs.first();

            if (rs != null) {
                    d.setId(rs.getInt("id"));
                    d.setNome(rs.getString("nome"));
                    d.setTelefone(rs.getString("telefone"));
                    d.setEmail(rs.getString("email"));

            } else {
                System.out.println("ERRO");
            }
            conn.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return d;
    }

}
