<?php

Class tipo_doacao_model extends CI_model {
    public $id;
    public $descricao;
    public $itens;

    
    
    public function __construct() {
        parent::__construct();
        
    }

    public function inserir() {
        $itens = array("descricao"=>$this->descricao, "itens"=>$this->itens);
        $this->db->insert('tipo_doacao', $itens);
    }
    
    public function recuperar(){
        $this->db->order_by('descricao', 'asc');
        $query = $this->db->get('tipo_doacao');
        return $query->result();
    }
  
    public function recuperarUm($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tipo_doacao');
        return $query->row();
    }
        public function remover($id){
       $this->db->where('id', $id);
       $this->db->delete('tipo_doacao');
    }
    
    public function update(){
        $this->db->set('descricao', $this->descricao);
        $this->db->set('itens', $this->itens);
        $this->db->where('id', $this->id);
        $this->db->update('tipo_doacao');
    }
}