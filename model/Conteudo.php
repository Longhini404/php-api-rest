<?php
include '../conection/conexao.php';

class Conteudo extends Conexao{
	private $titulo;
    private $autor;

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }


    public function insert($obj){
    	$sql = "INSERT INTO livro(titulo,autor) VALUES (:titulo,:autor)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo',  $obj->titulo);
        $consulta->bindValue('autor', $obj->autor);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE livro SET titulo = :titulo, autor = :autor WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('titulo', $obj->titulo);
		$consulta->bindValue('autor', $obj->autor);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM livro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
		$sql =  "SELECT FROM livro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM livro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}