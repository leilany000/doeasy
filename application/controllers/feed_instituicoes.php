<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feed_instituicoes extends CI_Controller {

	public function index() {
		         if ($this->session->userdata('usuario')->tipo == 'O'){ 
        redirect('usuario/restricao');
         } 


        $this->load->model('ong_model');
        $dados= $this->ong_model-> recuperar();
        $dados['ong']=$dados;

        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->view('feed_instituicoes.php', $dados);
        $this->load->view('footer.php');
    }

    


}