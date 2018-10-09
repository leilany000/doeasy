<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doadores_model extends CI_Model {
	public $id;
	public $nome;
	public $email;
    public $senha;
    public $telefone;
    public $cpf;
    public $endereco;

	public function __construct(){
		parent:: __construct();
	}
	
	public function Novo($dados)
	{
		$this->db->insert("doadores", $dados);
    }
}