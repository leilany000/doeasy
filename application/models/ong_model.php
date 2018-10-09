<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ong_model extends CI_Model {
	public $id;
	public $nome;
	public $email;
    public $telefone;
    public $cnpj;
    public $senha;
    public $endereco;
    public $resumo;
    public $descricao;
    public $redes;


	public function __construct(){
		parent:: __construct();
	}

	public function Novo($dados){
		$this->db->insert("ong", $dados);
    }
    public function inserir() {
        $itens = array("nome"=>$this->nome, "email"=>$this->email, "telefone"=>$this->telefone, "endereco"=>$this->endereco, "resumo"=>$this->resumo, "descricao"=>$this->descricao, "redes"=>$this->redes);
        $this->db->insert('ong', $dados);
    }
    
    public function recuperar(){
        $this->db->where('tipo', 'O');
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get('usuario');
        return $query->result();
    }

    public function recuperar_ong($id){
        $this->db->where('id', $id);
        $this->db->where('tipo', 'O');
        $query = $this->db->get('usuario');
        return $query->result();
    }

}	