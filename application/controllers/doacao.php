<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Classe doação
//  outra modificação
class doacao extends CI_Controller {

	public function index() {
        $this->load->view('header.php');
        $this->load->view('nav.php');
        $this->load->view('doacao.php');
        $this->load->view('footer.php');

        }

}