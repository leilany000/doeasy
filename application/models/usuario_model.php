
<?php

Class Usuario_model extends CI_model{
	public $id;
	public $login;
	public $nome;
	public $email;
    public $senha;
    public $telefone;
    public $cpf_cnpj;
    public $endereco;
    public $resumo;
    public $descricao;
    public $redes;
    

    public function __construct(){
		parent:: __construct();
	}
	
	public function recuperarPorLoginESenha($login,$senha){
		$this->db->where("login", $login);
		$this->db->where("senha", $senha);
		$query = $this->db->get("usuario");
		return $query->row();
	}

	public function Novo($dados)
	{
		$this->db->insert("usuario", $dados);
    }
}

?>