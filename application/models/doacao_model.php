<?php

Class doacao_model extends CI_model {
    public $id;
    public $descricao;
    public $tipo_doacao;
    public $data_doacao;
    public $doador;
    public $receptor;
    public $data_recebimento
    
    public function __construct() {
        parent::__construct();
        
    }
    
    
}