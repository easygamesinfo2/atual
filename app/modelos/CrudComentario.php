<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:01
 */

require 'Comentario.php';
require 'DBConnection.php';
class CrudComentario
{
    private $conexao;

    public function getComentarios()
    {
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from comentario';

        $resultado = $this->conexao->query($sql);
        $comentarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaComentarios = [];

        foreach ($comentarios as $comentario) {
            $listaComentarios[] = new Comentario($comentario['descricao_comentario'],$comentario['cod_comentario']);
        }


        return $listaComentarios;

    }

    public function getComentario(int $id)
    {
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from comentario WHERE cod_comentario = $id";

        $resultado = $this->conexao->query($sql);
        $comentario = $resultado->fetch(PDO::FETCH_ASSOC);

        $listaComentarios = new Comentario($comentario['descricao_comentario'],$comentario['cod_comentario']);


        return $listaComentarios;
    }
    public function insertComentario(Comentario $com){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into comentario(descricao_avaliacao) VALUES('".$com->getDescricao()."'";
        $this->conexao->exec($sql);

    }
    public function atualizaComentario(Comentario  $com,int $id){
        $this->conexao = DBConnection::getConexao();
        $sql = "UPDATE comentario SET descricao_comentario = '".$com->getDescricao()."' WHERE cod_comentario = $id";
        $this->conexao->exec($sql);
    }
    public function excluirComentario( int $com){
        $this->conexao = DBConnection::getConexao();
        $sql ="delete from comentario WHERE cod_comentario = $com";
        $this->conexao->exec($sql);

    }



}
