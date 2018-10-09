<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_doacao extends CI_Controller {

        public function index() {
              $this->load->view('header.php');
              $this->load->view('nav.php');
              $this->load->view('tipo_doacao.php');
              $this->load->view('footer.php');
              }

        public function cadastrar() {
                    if ($this->session->userdata('usuario')->tipo == 'D'){ 
        redirect('usuario/restricao');
         } 
                $this->load->model("tipo_doacao_model");
                $this->tipo_doacao_model->descricao = $_POST['descricao'];
                $this->tipo_doacao_model->itens = $_POST['itens'];
                $this->tipo_doacao_model->inserir();
                redirect('tipo_doacao/listar');
               
        }
        public function listar(){
                    if ($this->session->userdata('usuario')->tipo == 'D'){ 
        redirect('usuario/restricao');
         } 
               $this->load->model('tipo_doacao_model');
               $dados["tipo"] = $this->tipo_doacao_model->recuperar();
               $this->load->view('header.php');
               $this->load->view('nav.php');
               $this->load->view('tipo_doacao.php', $dados);
               $this->load->view('footer.php');

        }
         public function excluir($id){
                    if ($this->session->userdata('usuario')->tipo == 'D'){ 
        redirect('usuario/restricao');
         } 
             $this->load->model('tipo_doacao_model');
             $this->tipo_doacao_model->remover($id);
             redirect('tipo_doacao/listar');
         }
         
         public function editar($id){
                    if ($this->session->userdata('usuario')->tipo == 'D'){ 
        redirect('usuario/restricao');
         } 
             $this->load->model('tipo_doacao_model');
             $dados["tipo"] = $this->tipo_doacao_model->recuperarUm($id);
            $this->load->view('header.php');
            $this->load->view('nav.php');
             $this->load->view('editar_tipo_doacao', $dados);
             $this->load->view('footer');
         }
         
         public function atualizar($id){
                    if ($this->session->userdata('usuario')->tipo == 'D'){ 
        redirect('usuario/restricao');
         } 
              $this->load->model('tipo_doacao_model');
               $this->tipo_doacao_model->descricao = $_POST["descricao"];
               $this->tipo_doacao_model->itens = $_POST["itens"];
               $this->tipo_doacao_model->id = $id;
               $this->tipo_doacao_model->update();
               redirect('tipo_doacao/listar');
         }

}