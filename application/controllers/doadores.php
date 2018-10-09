<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doadores extends CI_Controller {

	#carregamento da página principal
        public function index(){
                if($this->session->has_userdata("usuario")){
                $this->load->view('header.php');
                $this->load->view('nav.php');
                $this->load->view('footer.php');
                } else{
                redirect("usuario/login");
    }
}
        #página de login
        public function login(){
                $this->load->view('usuarioP/login.php');        
        }

        #cadastro de doador
        public function cadastro1(){
                $this->load->view('usuarioP/cadastroDoadores.php');      
        }

        public function Novo(){
               $dados = array(
            			"nome"=> $this->input->post("nome"),
            			"email"=> $this->input->post("email"),
                        "senha"=> md5($this->input->post("senha")),
                        "telefone"=>$this->input->post("numero"),
                        "cpf"=>$this->input->post("cpf"),
                        "endereco"=>$this->input->post("endereco")
                );
		        $this->load->model("Doadores_model");
                $this->Doadores_model->Novo($dados);
                redirect('doadores/usuarioP/login');     
        }

        public function __construct(){
                parent::__construct();

                if (! $this->session->has_userdata("usuario")){
                    redirect("usuario/usuarioP/login");
        }
    }

    public function exibir_feed(){
        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->model('ong_model');
        $resultado = $this->ong_model->recuperar_ong($this->uri->segment(3));
        $dados["ong"] = $resultado;
        $this->load->view('detalhes_ong', $dados);
        $this->load->view('footer.php');
    }

}
