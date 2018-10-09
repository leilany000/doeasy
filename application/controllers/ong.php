<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ong extends CI_Controller {

        #carregamento da página principal
        public function index(){
                $this->load->view('header.php');
                $this->load->view('nav.php');
                #o codigo entra aqui
                $this->load->view('footer.php');
        }

        #pedidos
        public function pedidos(){
                $this->load->view('header.php');
                $this->load->view('nav.php');
                $this->load->view('pedidos.php');
                $this->load->view('footer.php');
        }
        
        #página de login        
        #public function login(){
            #$this->load->view('login.php');
        #}
        
        #cadastro de doador
        public function cadastro1(){
                $this->load->view('cadastroOng.php');
        }

        public function Novo(){
                $dados = array(
			            "nome"=> $this->input->post("nome"),
		                "email"=> $this->input->post("email"),
                        "telefone"=>$this->input->post("numero"),
                        "cnpj"=>$this->input->post("cnpj"),
                        "senha"=> md5($this->input->post("senha")),
                        "endereco"=>$this->input->post("endereco")
                );
		        $this->load->model("Ong_model");
                $this->Ong_model->Novo($dados);
                redirect('ong/login');             
        }

        public function __construct(){
                parent::__construct();

                if (! $this->session->has_userdata("usuario")){
                        redirect("usuario/login");
        }
      }
}